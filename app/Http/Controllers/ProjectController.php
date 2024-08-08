<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Cloudinary\Cloudinary;
use Cloudinary\Api\Upload\UploadApi;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Project::all();

        // return response()->json($projects);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {

        $cloudinary = new Cloudinary();

        $uploadedFileUrl = $cloudinary->uploadApi()->upload($request->file('image')->getRealPath());

        $imageUrl = $uploadedFileUrl['secure_url'];

        $requestData = $request->all();
        $requestData['image'] = $imageUrl;

        $project = Project::create($requestData);

        return response()->json([
            'status' => true,
            'message' => "Projeto criado com sucesso!",
            'projeto' => $project
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $project = Project::findOrFail($id);
            return response()->json([
                'status' => true,
                'projeto' => $project
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'projeto' => 'Projeto não encontrado.',
                'erro' => '404 Not Found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $project = Project::findOrFail($id);
            $requestData = $request->all();

            $project->update($requestData);

            return response()->json([
                'status' => true,
                'message' => "Projeto Atualizado com Sucesso!",
                'projeto' => $project
            ]);
        } catch(ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => "Projeto não encontrado !",

            ], 404);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $project = Project::findOrFail($id);
            $project->delete();

            return response()->json([
                'status' => true,
                'message' => "Projeto Deletado com Sucesso!"
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Projeto não encontrado.'
            ], 404);
        }
    }
}
