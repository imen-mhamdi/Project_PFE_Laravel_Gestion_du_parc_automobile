
   <div>


<div>

       <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
       
      
       <h1>code Entretien : {{$code_entretien}}</h1>
       <div class="px-3 py-5 bg-grey sm:p-4">
                         
                         </div>
       <h1>Code vihicule : {{$code_vihicule}}</h1>
       <div class="px-3 py-5 bg-grey sm:p-4">
                         
                         </div>
        
        <h1>km Vihicule : {{$km_vehicule}}</h1>
        <div class="px-3 py-5 bg-grey sm:p-4">
                         
                         </div>
                         <h1>Avis : {{$avis}}</h1>
        <div class="px-3 py-5 bg-grey sm:p-4">
                         
                         </div>
                         <h1>date entretien : {{$date_entretien}}</h1>
        <div class="px-3 py-5 bg-grey sm:p-4">
                         
                         </div>
       Pieces des Rechange
           <div class="flex flex-col">
               <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                   <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                       <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                           <table class="min-w-full divide-y divide-gray-200 w-full">
                               <thead>
                               <tr>
                               <th scope="col"  class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                   code Piece
                                   </th>
                                   <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                   Model piece
                                   </th>
                                   <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                   Qte piece
                                   </th>
                                 

                                 
                                  
                             
                                
                                  
                              
                               </tr>
                               </thead>
                               <!-- [{"id":1,"nom":"test","prenom":"test","data_naissance":"2022-05-30","adresse":"adresse test","tel":"123456789","type":"type test","etat_precense":"present","type_premis":"permis","created_at":null,"updated_at":null}] -->
                            
                               <tbody class="bg-white divide-y divide-gray-200">
                               @foreach ($specificFacture as $user)
                                   <tr>
                                   <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                           {{ $user->code_pie }}
                                       </td>
                                       <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                           {{ $user->model_pie }}
                                       </td>

                                       <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                           {{ $user->qte_pie }}
                                       </td>

                                 
                                    

                                     
                                   </tr>
                               @endforeach
                           </table>
                       </div>
                   </div>
               </div>
               
           </div>
  </div>



