<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 5.8 - DataTables Server Side Processing using Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">    
     <br />
     <h3 align="center">Dynamically Add / Remove input fields in Laravel 5.8 using Ajax jQuery</h3>
     <br />
   <div class="table-responsive">
    <span id="result"></span>
     <form method="post" id="dynamic_form">
        @csrf
               {{-- first table feild --}}
    <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <th scope="row">Customer</th>
            <td><input type="text" class="form-control"  name="customer"></td>
            <th scope="row">Size: </th>
            <td><input type="text" class="form-control"  name="size"></td>
          </tr>
          <tr>
            <th scope="row">Product Name</th>
            <td><input type="text" class="form-control"  name="product_name"></td>
            <th scope="row">Type: </th>
            <td><input type="text" class="form-control"  name="type"></td>
          </tr>
          <tr>
            <th scope="row">Item Code</th>
            <td><input type="text" class="form-control"  name="item_code"></td>
            <th scope="row">Total Weight </th>
            <td><input type="text" class="form-control"  name="total_weight"></td>
          </tr>
          <tr>
            <th scope="row">Revision Number</th>
            <td><input type="text" class="form-control"  name="revision_number"></td>
            <th scope="row">Tablets Per Serving </th>
            <td><input type="text"  class="form-control"  name="tablets_saving"></td>
          </tr>
          <tr>
            <th scope="row">Date Of Issue</th>
            <td><input type="text" class="form-control"  name="issue_date"></td>
            <th scope="row">Expiry </th>
            <td><input type="text" class="form-control"  name="expiry"></td>
          </tr>
          <tr>
            <th scope="row">Customer Product Code</th>
            <td><input type="text" class="form-control"  name="customer_product_code"></td>
            <th scope="row">Pack Size</th>
            <td><input type="text" class="form-control"  name="pack_size"></td>
          </tr>
        
        </tbody>
        {{-- 2nd form feild --}}
      </table>
         
                <table class="table table-bordered table-striped" id="user_table">
                <thead>
                    
                        <th><p class="p-5">RM Code</p></th>
                        <th><p class="p-5">Raw Material</p></th>
                        <th><p class="p-5">Compound Ingredients</p></th>
                        <th><p class="p-5">Function</p></th>
                        <th><p class="p-5">Active Ingredient</p></th>
                        <th><p class="p-5">Claim per tablet (mg)</p></th>
                        <th><p class="p-5">Input per tablet (mg)</p></th>
                        <th><p class="p-5">*% NRV</p></th>
                        <th><p class="p-5">Action</p></th>
                    
               </thead>
          
               <tbody>       
           
               </tbody>
           </table>


           {{-- 3 form feild --}} 

           <table class="table table-bordered table-striped" id="new_table">
            <tbody>       
                <caption>Excipients</caption>
             </tbody>
          </table>



        {{-- 4 form feild --}} 

          
           <table class="table table-bordered table-striped" id="cv">
            
            <tbody>       
              <caption>Packaging</caption>
              <tr>
                <th scope="row">CP150JWH</th>
                <td><input type="text" class="form-control"  name="cp"></td>
                <th scope="row">Label </th>
                <td><input type="text" class="form-control"  name="label"></td>
              </tr>

              <tr>
                <th scope="row">CL38LSWT</th>
                <td><input type="text" class="form-control"  name="cl"></td>
                <th scope="row">Other </th>
                <td><input type="text" class="form-control"  name="other"></td>
              </tr>

            </tbody>
            </table>

        
        {{-- 5 form feild --}} 

          
        <table class="table table-bordered table-striped" id="v">
            
            <tbody>       
             
              <tr>
                <th scope="row">Storage</th>
                <td><input type="text" class="form-control"  name="storage"></td>
              </tr>

              <tr>
                <th scope="row">Irradiation</th>
                <td><input type="text" class="form-control"  name="irradiation"></td>
              </tr>

              <tr>
                <th scope="row">GM Status</th>
                <td><input type="text" class="form-control"  name="gm_status"></td>
              </tr>

              <tr>
                <th scope="row">Allergens</th>
                <td><input type="text" class="form-control"  name="allergens"></td>
              </tr>

              <tr>
                <th scope="row">TSE/BSE Status </th>
                <td><input type="text" class="form-control"  name="tse_bse_status"></td>
              </tr>

              <tr>
                <th scope="row">Suitable for Vegetarians</th>
                <td><input type="text" class="form-control"  name="suitable_vegetarians"></td>
              </tr>

              <tr>
                <th scope="row">Suitable for Vegans</th>
                <td><input type="text" class="form-control"  name="suitable_vegans"></td>
              </tr>

            </tbody>
        </table>


              {{-- 6 form feild --}} 

              <table class="table table-bordered table-striped" id="oo">
                <thead>
                    <th width="%"><p class="p-5">ALLERGENS</p></th>
                    <th width="10%"><p class="p-5">Product Free From YES/NO</p></th>
                </thead>
                <tbody>       
                  <tr>
                      <td>Free from Peanuts and Peanut Derivatives (including possible cross contamination)</td>
                      <td><select name="yes_no" id="" class="form-control">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>  
                        </select>
                        </td>
                  </tr>

                  <tr>
                    <td>Free from other Nut and Nut Derivatives</td>
                    <td><select name="yes_no" id="" class="form-control">
                        <option value="">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>  
                      </select></td>
                </tr>

                <tr>
                    <td>Free from Sesame Seeds and Sesame Seed Derivatives</td>
                    <td><select name="yes_no" id="" class="form-control">
                        <option value="">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>  
                      </select></td>
                </tr>

                <tr>
                    <td>Free from other Seeds and Seed Derivatives (Poppy Seeds, Cotton Seeds, Sunflower Seeds) </td>
                    <td><select name="yes_no" id="" class="form-control">
                        <option value="">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>  
                      </select></td>
                </tr>

                <tr>
                    <td>Free from Milk and Milk Derivatives (including lactose)</td>
                    <td><select name="yes_no" id="" class="form-control">
                        <option value="">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>  
                      </select></td>
                </tr>

                <tr>
                    <td>Free from Egg and Egg Derivatives </td>
                    <td><select name="yes_no" id="" class="form-control">
                        <option value="">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>  
                      </select></td>
                </tr>

                <tr>
                    <td>Free from Cereals and Derivatives containing OR POTENTIALLY CONTAMINATED WITH </td>
                    <td><select name="yes_no" id="" class="form-control">
                        <option value="">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>  
                      </select></td>
                </tr>

                <tr>
                    <td>Free from Soya and Soya Derivatives</td>
                    <td><select name="yes_no" id="" class="form-control">
                        <option value="">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>  
                      </select></td>
                </tr>

                <tr>
                    <td>Free from Lupin and Lupin Derivatives </td>
                    <td><select name="yes_no" id="" class="form-control">
                        <option value="">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>  
                      </select></td>
                </tr>

                <tr>
                    <td>Free from Mustard and Mustard Derivatives </td>
                    <td><select name="yes_no" id="" class="form-control">
                        <option value="">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>  
                      </select></td>
                </tr>

                <tr>
                    <td>Free from Celery or Celery Derivatives (including Celeriac) </td>
                    <td><select name="yes_no" id="" class="form-control">
                        <option value="">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>  
                      </select></td>
                </tr>

                <tr>
                    <td>Free from Fish and Fish Derivatives </td>
                    <td><select name="yes_no" id="" class="form-control">
                        <option value="">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>  
                      </select></td>
                </tr>

                <tr>
                    <td>Free from Molluscs and their Derivatives</td>
                    <td><select name="yes_no" id="" class="form-control">
                        <option value="">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>  
                      </select></td>
                </tr>

                <tr>
                    <td>Free from Crustaceans and their Derivatives</td>
                    <td><select name="yes_no" id="" class="form-control">
                        <option value="">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>  
                      </select></td>
                </tr>

                <tr>
                    <td>Free from Sulphur Dioxide and Sulphites (E220, E228) at levels > 10mg/kg or 10mg/litre </td>
                    <td><select name="yes_no" id="" class="form-control">
                        <option value="">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>  
                      </select></td>
                </tr>
                
                </tbody>
            </table>


                 {{-- 7 form feild --}} 

           <table class="table table-bordered table-striped">

            <thead>
                <th width="%"><p class="p-5">Amendment</p></th>
                <th width="10%"><p class="p-5">Date</p></th>
            </thead>
            <tbody>       
                <tr>
                
                    <td><input type="text" class="form-control"  name="amendment"></td>
                    <td><input type="date" class="form-control"  name="amendment_date"></td>
                  </tr>
            </tbody>
             </table>


        
                 {{-- 8 form feild --}} 

                 <table class="table table-bordered table-striped" style="width: 50%;">
                    <tbody>       
                        <tr>
                            <th><p class="p-5">Approved by: </p></th>
                            <td><input type="text" class="form-control"  name="approved_by"></td>
                          </tr>

                          <tr>
                            <th><p class="p-5">Date:</p></th>
                            <td><input type="date" class="form-control"  name="date"></td>
                          </tr>
                    </tbody>
                </table>


                  {{-- 9 form feild --}} 

                  <table class="table table-bordered table-striped" style="width: 50%;">
                    <tbody>       
                        <caption>Customer Approval:</caption>
                        <tr>
                            <th width="%"><p class="p-5">Approved by: </p></th>
                            <td><input type="text" class="form-control"  name="approved_by_customer"></td>
                          </tr>

                          
                          <tr>
                            <th width="%"><p class="p-5">Date:</p></th>
                            <td><input type="date" class="form-control"  name="customer_date"></td>
                          </tr>
                    </tbody>
                </table>



          <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />   
    </form>


    


   </div>
  </div>
 </body>
</html>

<script>
     
      $(document).ready(function(){
      
       var count = 1;
      
       dynamic_field(count);
      
       function dynamic_field(number)
       {
        html = '<tr>';
              html += '<td><input type="text" name="rm_code[]" class="form-control" /></td>';
              html += '<td><input type="text" name="raw_material[]" class="form-control" /></td>';
              html += '<td><input type="text" name="compound_ingredients[]" class="form-control" /></td>';
              html += '<td><input type="text" name="function[]" class="form-control" /></td>';
              html += '<td><input type="text" name="active_ingredient[]" class="form-control" /></td>';
              html += '<td><input type="text" name="claim_tablet[]" class="form-control" /></td>';
              html += '<td><input type="text" name="input_tablet[]" class="form-control" /></td>';
              html += '<td><input type="text" name="nrv[]" class="form-control" /></td>';
              if(number > 1)
              {
                  html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
                  $('#user_table tbody').append(html);
              }
              else
              {   
                  html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
                  $('#user_table tbody').html(html);
              }
       }
      
       $(document).on('click', '#add', function(){
        count++;
        dynamic_field(count);
       });
      
       $(document).on('click', '.remove', function(){
        count--;
        $(this).closest("tr").remove();
       });
      
       $('#dynamic_form').on('submit', function(event){
              event.preventDefault();
              $.ajax({
                  url:'{{ route("dynamic-field.insert") }}',
                  method:'post',
                  data:$(this).serialize(),
                  dataType:'json',
                  beforeSend:function(){
                      $('#save').attr('disabled','disabled');
                  },
                  success:function(data)
                  {
                      if(data.error)
                      {
                          var error_html = '';
                          for(var count = 0; count < data.error.length; count++)
                          {
                              error_html += '<p>'+data.error[count]+'</p>';
                          }
                          $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                      }
                      else
                      {
                          dynamic_field(1);
                          $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                      }
                      $('#save').attr('disabled', false);
                  }
              })
       });


    //    new tebale script

    var count = 1;
      
      dynamic(count);
     
      function dynamic(number)
      {
       html = '<tr>';
             html += '<td><input type="text" name="excipients_rm_code[]" class="form-control" /></td>';
             html += '<td><input type="text" name="excipients_raw_material[]" class="form-control" /></td>';
             html += '<td><input type="text" name="excipients_compound_ingredients[]" class="form-control" /></td>';
             html += '<td><input type="text" name="excipients_function[]" class="form-control" /></td>';
             html += '<td><input type="text" name="excipients_active_ingredient[]" class="form-control" /></td>';
             html += '<td><input type="text" name="excipients_claim_tablet[]" class="form-control" /></td>';
             html += '<td><input type="text" name="excipients_input_tablet[]" class="form-control" /></td>';
             html += '<td><input type="text" name="excipients_nrv[]" class="form-control" /></td>';
             if(number > 1)
             {
                 html += '<td><button type="button" name="remove" id="" class="btn btn-danger re">Remove</button></td></tr>';
                 $('#new_table tbody').append(html);
             }
             else
             {   
                 html += '<td><button type="button" name="add" id="ad" class="btn btn-success">Add</button></td></tr>';
                 $('#new_table tbody').html(html);
             }
      }
     
      $(document).on('click', '#ad', function(){
       count++;
       dynamic(count);
      });
     
      $(document).on('click', '.re', function(){
       count--;
       $(this).closest("tr").remove();
      });
     
    
      
      });
      </script>
      


{{-- <h1>post</h1>
@foreach ($post as $p) 
 <h2>{{$p->title}}</h2>
<h2>{{$p->id}}</h2>  --}}


 {{-- <a href="{{route('like',$p->id)}}">Like ()</a> --}}
{{-- <a href="">Dislike ()</a><br> --}}

 {{-- @endforeach  --}}


 {{-- <a type="" href="{{route('view', $p->id)}}">View Post</a>  --}}