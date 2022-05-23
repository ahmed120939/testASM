<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    
 /**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Documentation API",
 *      description=" Documentation API Pour Projet TESTASM",
 *      @OA\Contact(
 *          email="admin@admin.com"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 *
     
     * @OA\Get(
     *      path="/api/typeReclamation/getAll",
     *      operationId="GetAllTypeReclamation",
     *      tags={"TypeReclamation"},

     *      summary="retourner la liste des TypeReclamations",
     *      description="retourner la liste des TypeReclamations",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     
        * @OA\Post(
     *     path="/api/typeReclamation/store",
     *     operationId="addTypeReclamation",
     *     description="Creation TypeReclamation",
     *     tags={"TypeReclamation"},
     *     @OA\RequestBody(
     *         description="Creation TypeReclamation",
     * @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
    *                  @OA\Property(
    *                      property="nom",
    *                      type="string",
    *                      description="Nom"
    *                  )
    *                 
    *              )
     *         ),
     * 
     *         
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="pet response",
     *        
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="unexpected error",
     *        
     *     )
     * )
     * 
     * 
     *  
     * 





        * @OA\Get(
     *      path="/api/user/getAll",
     *      operationId="GetAlluser",
     *      tags={"User"},

     *      summary="Retourner la liste des utilisateur",
     *      description="Retourner la liste des utilisateur",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
    
    * @OA\Get(
        *      path="/api/user/get/{user_id}",
        *      operationId="Getuser",
        *      tags={"User"},
         *     @OA\Parameter(
     *         name="user_id",
     *         description="",
     *          in = "path",
     *       
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         ) 
     *     ),
   
        *      summary="Retouner un utilisateur par ID",
        *      description="Retouner un utilisateur par ID",
        
        *      @OA\Response(
        *          response=200,
        *          description="Successful operation",
        *          @OA\MediaType(
        *           mediaType="application/json",
        *      )
        *      ),
        *      @OA\Response(
        *          response=401,
        *          description="Unauthenticated",
        *      ),
        *      @OA\Response(
        *          response=403,
        *          description="Forbidden"
        *      ),
        * @OA\Response(
        *      response=400,
        *      description="Bad Request"
        *   ),
        * @OA\Response(
        *      response=404,
        *      description="not found"
        *   ),
        *  )



          
     * @OA\Post(
     *     path="/api/registre",
     *     operationId="addUser",
     *     description="Creation utilisateur",
     *     tags={"User"},
     *     @OA\RequestBody(
     *         description="Creation utilisateur",
     * @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
 *                  @OA\Property(
 *                      property="name",
 *                      type="string",
 *                      description="Nom"
 *                  ),
 *                  @OA\Property(
 *                      property="email",
 *                      type="email",
 *                      description="Email"
 *                  ),
 *                  @OA\Property(
 *                      property="password",
 *                      type="password",
 *                      description="Mot de passe"
 *                  ),
 *                  @OA\Property(
 *                      property="password_confirmation",
 *                      type="password",
 *                      description="Confirmation mot de passe"
 *                  )
 *              )
     *         ),
     * 
     *         
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="pet response",
     *        
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="unexpected error",
     *        
     *     )
     * )
     * 
     * @OA\Post(
     *     path="/api/login",
     *     operationId="login",
     *     description="Login utilisateur",
     *     tags={"User"},
     *     @OA\RequestBody(
     *         description="Login utilisateur",
     * @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
 *                  
 *                  @OA\Property(
 *                      property="email",
 *                      type="email",
 *                      description="Email"
 *                  ),
 *                  @OA\Property(
 *                      property="password",
 *                      type="password",
 *                      description="Mot de passe"
 *                  ),
 *                 
 *              )
     *         ),
     * 
     *         
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="pet response",
     *        
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="unexpected error",
     *        
     *     )
     * )
     * @OA\Post(
     *     path="/api/logout",
     *     operationId="logout",
     *     description="Logout utilisateur",
     *     tags={"User"},
     *     @OA\RequestBody(
     *         description="Logout utilisateur",
            
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="pet response",
     *        
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="unexpected error",
     *        
     *     )
     * )
     * 
     * 
     * @OA\Delete(
     *      path="/api/user/delete/{user_id}",
     *      operationId="DeleteUser",
     *      tags={"User"},
     *     @OA\Parameter(
     *         name="user_id",
     *         description="",
     *          in = "path",
     *       
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         ) 
     *     ),
   
        *      summary="Supprimer un utilisateur par ID",
        *      description="Supprimer un utilisateur par ID",
        
        *      @OA\Response(
        *          response=200,
        *          description="Successful operation",
        *          @OA\MediaType(
        *           mediaType="application/json",
        *      )
        *      ),
        *      @OA\Response(
        *          response=401,
        *          description="Unauthenticated",
        *      ),
        *      @OA\Response(
        *          response=403,
        *          description="Forbidden"
        *      ),
        * @OA\Response(
        *      response=400,
        *      description="Bad Request"
        *   ),
        * @OA\Response(
        *      response=404,
        *      description="not found"
        *   ),
        *  )

     * 
        

     
        * @OA\Get(
     *      path="/api/reclamation/getAll",
     *      operationId="GetAllReclamation",
     *      tags={"Reclamation"},

     *      summary="Retourner la liste des Reclamations",
     *      description="Retourner la liste des Reclamations",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     

    * @OA\Get(
        *      path="/api/reclamation/get/{reclamation_id}",
        *      operationId="GetReclamationID",
        *      tags={"Reclamation"},
         *     @OA\Parameter(
     *         name="reclamation_id",
     *         description="",
     *          in = "path",
     *       
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         ) 
     *     ),
   
        *      summary="Retouner un utilisateur par ID",
        *      description="Retouner un utilisateur par ID",
        
        *      @OA\Response(
        *          response=200,
        *          description="Successful operation",
        *          @OA\MediaType(
        *           mediaType="application/json",
        *      )
        *      ),
        *      @OA\Response(
        *          response=401,
        *          description="Unauthenticated",
        *      ),
        *      @OA\Response(
        *          response=403,
        *          description="Forbidden"
        *      ),
        * @OA\Response(
        *      response=400,
        *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )

     * @OA\Get(
     *      path="/api/reclamation/getByUser/{user_id}",
     *      operationId="GetReclamationUserID",
     *      tags={"Reclamation"},
     *     @OA\Parameter(
     *         name="user_id",
     *         description="",
     *          in = "path",
     *       
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         ) 
     *     ),
   
        *      summary="Retouner un utilisateur par UserID",
        *      description="Retouner un utilisateur par UserID",
        
        *      @OA\Response(
        *          response=200,
        *          description="Successful operation",
        *          @OA\MediaType(
        *           mediaType="application/json",
        *      )
        *      ),
        *      @OA\Response(
        *          response=401,
        *          description="Unauthenticated",
        *      ),
        *      @OA\Response(
        *          response=403,
        *          description="Forbidden"
        *      ),
        * @OA\Response(
        *      response=400,
        *      description="Bad Request"
        *   ),
        * @OA\Response(
        *      response=404,
        *      description="not found"
        *   ),
        *  )


        * @OA\Post(
        *     path="/api/reclamation/store",
        *     operationId="AddReclamation",
        *     description="Creation Reclamation",
        *     tags={"Reclamation"},
        *     @OA\RequestBody(
        *         description="Creation Reclamation",
        * @OA\MediaType(
        *             mediaType="multipart/form-data",
        *             @OA\Schema(
        *                  @OA\Property(
        *                      property="desc",
        *                      type="string",
        *                      description="description"
        *                  ),
        *                  @OA\Property(
        *                      property="user_id",
        *                      type="integer",
        *                      description="UserID"
        *                  ),
        *                  @OA\Property(
        *                      property="type_reclamation_id",
        *                      type="integer",
        *                      description="TypeReclamationID"
        *                  ),
        *                 
        *              )
        *         ),
        * 
        *         
        *     ),
        *     @OA\Response(
        *         response=200,
        *         description="pet response",
        *        
        *     ),
        *     @OA\Response(
        *         response="default",
        *         description="unexpected error",
        *        
        *     )
        * )
        * @OA\Delete(
        *      path="/api/reclamation/delete/{rec_id}",
        *      operationId="DeleteReclamation",
        *      tags={"Reclamation"},
        *     @OA\Parameter(
        *         name="rec_id",
        *         description="",
        *          in = "path",
        *       
        *         required=true,
        *         @OA\Schema(
        *             type="integer"
        *         ) 
        *     ),
   
        *      summary="Supprimer une reclamation par ID",
        *      description="Supprimer une reclamation par ID",
        
        *      @OA\Response(
        *          response=200,
        *          description="Successful operation",
        *          @OA\MediaType(
        *           mediaType="application/json",
        *      )
        *      ),
        *      @OA\Response(
        *          response=401,
        *          description="Unauthenticated",
        *      ),
        *      @OA\Response(
        *          response=403,
        *          description="Forbidden"
        *      ),
        * @OA\Response(
        *      response=400,
        *      description="Bad Request"
        *   ),
        * @OA\Response(
        *      response=404,
        *      description="not found"
        *   ),
        *  )
        
        * 
        * 
        */
     
       
    public function getAllCountries(){
        //voir plus bas
    }
}