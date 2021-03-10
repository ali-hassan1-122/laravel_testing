<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 5.8 - DataTables Server Side Processing using Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
<div class="content">
      <!-- Update Product -->
      <div class="block-header  block-header-default ">
        <h1 class="block-title">View Product</h1>
    </div>
    <div class="table-responsive">
     <span id="result"></span>
      <form method="post" id="dynamic_form">
         @csrf
 
                 <table class="table table-bordered table-striped" id="user_table" style="font-size: 13px;  text-align: center;">
                 <thead>

                     
                         <th class="align-middle">RM Code</th>
                         <th class="align-middle">Raw Material</th>
                         <th class="align-middle">Compound Ingredients</th>
                         <th class="align-middle">Function</th>
                         <th class="align-middle">Active Ingredient</th>
                         <th class="align-middle">Claim per tablet (mg)</th>
                         <th class="align-middle">Input per tablet (mg)</th>
                         <th class="align-middle">*% NRV</th>
                        
                     
                </thead>
           
                <tbody>       
                  @php 
                  $arrays = explode(',', $product->row); 
                
                  @endphp
                        @foreach($arrays as $array) 
                  <tr>
                        
                       
                    <td><input type="text" name="rm_code[]" value="{{ $array }}" class="form-control" /></td>             
                    <td><input type="text" name="raw_material[]" value="{{ $array }}" class="form-control" /></td>
                    <td><input type="text" name="compound_ingredients[]" value="{{ $array }}" class="form-control" /></td>
                    <td><input type="text" name="function[]" value="{{ $array }}" class="form-control" /></td>
                    <td><input type="text" name="active_ingredient[]"  value="{{ $array }}" class="form-control" /></td>
                    <td><input type="text" name="claim_tablet[]" value="{{ $array }}" class="form-control" /></td>
                    <td><input type="text" name="input_tablet[]"  value="{{ $array }}" class="form-control" /></td>
                    <td><input type="text" name="nrv[]" value="{{ $array }}" class="form-control" /></td>
                 
                  
            </tr>
            @endforeach 
                    
                
                </tbody>
            </table>
 
 
 
 
           <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />   
     </form>
 
 
     
 
 
    </div>
      <!-- END Update Product -->
  </div>
  <!-- END Page Content -->



</body>
</html>