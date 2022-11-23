<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{assets/images/favicon.ico}">

        
        <!-- jquery.vectormap css -->
        <link href="{{ asset('frontend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="{{ asset('frontend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ asset('frontend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />  
        
        
        <!-- Bootstrap Css -->
        <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('frontend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('frontend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

<body>

   




    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                <a href="{{ route('income.add') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;">Add Income</a>
               
                
                    <h4 class="card-title">Income All Data </h4>


                    <div class="row">
    <div class="col-md-6">
        <form action="{{ url('/income/all') }}" method="GET">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <select name="role" id="">
                            @if(isset($_GET['role']))
                            
                                <option value="{{$_GET['role'] }}">{{ $_GET['role']}}</option>
                                <option value="">Default</option>
                                <option value="Dhaka University">Dhaka University</option>
                                <option value="BIWTC">BIWTC</option>
                                <option value="Ministy Of Health">Ministy Of Health</option>
                                <option value="Azimpur Office">Azimpur Office</option>
                                <option value="Resturent">Resturent</option>
                            @else
                                <option value="">Default</option>
                                <option value="Dhaka University">Dhaka University</option>
                                <option value="BIWTC">BIWTC</option>
                                <option value="Ministy Of Health">Ministy Of Health</option>
                                <option value="Azimpur Office">Azimpur Office</option>
                                <option value="Resturent">Resturent</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary py-2"> Filter search</button>
                </div>
            </div>
        </form>
    </div>
   </div>    
   
   

   <div class="row">
    <div class="col-md-4">
        <form action="{{ url('/income/all') }}" method="GET">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <select name="banking" id="">
                            @if(isset($_GET['banking']))
                            
                                <option value="{{$_GET['banking'] }}">{{ $_GET['banking']}}</option>
                                <option value="">Default</option>
                                <option value="NRB">NRB</option>
                                <option value="Brac Bank">Brac Bank</option>
                            @else
                            <option value="">Default</option>
                                <option value="NRB">NRB</option>
                                <option value="Brac Bank">Brac Bank</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary py-2"> Bank </button>
                </div>
            </div>
        </form>
    </div>
   </div> 













                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Income From</th> 
                            <th> Income amount </th> 
                            <th>Date </th> 
                            <th>Bank </th> 
                            <th>Action</th>
                            
                        </thead>


                        <tbody>
                        	
                    
                        @foreach($income as $key => $item) 
                        
                        <tr>
                            <td> {{ $key+1}} </td>
                            <td> {{ $item->income_from }} </td> 
                            <td> {{ $item->income_amount }} </td> 
                            <td> {{ $item->date }} </td> 
                            <td> {{ $item->bank }} </td> 
                          
                          
                            
                            <td>

   <a href="" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

     <a href="" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>

                            </td>
                           
                        </tr>
                        @endforeach 
                
                        
                        </tbody>
                    </table>
                    
                    <h2> Total =  {{ $sum }} </h2>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                     
                        
                    </div> <!-- container-fluid -->
                </div>


<!-- income form close -->


 
</body>


</html>

