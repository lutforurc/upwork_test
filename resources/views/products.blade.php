@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Details') }}</div>
                <a href="{{ route('home') }}">Dashboard</a>
                    <form action="" method="post" id="paramenter">
                        <div class="row">
                            <meta name="csrf-token" content="{{ csrf_token() }}" />
                                <div class="col-3">
                                <select class="form-select" id="author"  aria-label="Default select example">
                                        <option selected value="">All</option>
                                        @foreach ($authors as $author )
                                            <option value="{{ $author->author_name }}">{{ $author->author_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-3">
                                    <select id="product" class="form-control">
                                        <option value="">All Product</option>
                                        @foreach ($products as $product )
                                            <option value="{{ $product->name }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-4">
                                <input class="form-control" id="date-range" name="date-range"/>
                                </div>
                                <div class="col-2">
                                    <button id="submit-btn" class="btn btn-success btn-block" type="submit">Submit </button>
                                </div>
                        </div>
                    </form>
                
                <div class="card-body">              
                   <table class="table" id="product-table">
                       <thead>
                           <tr>
                               <th>Id</th>
                               <th>Name</th>
                               <th>Description</th>
                               <th>Price</th>
                               
                           </tr>
                       </thead>
                       <tbody >
                          
                           
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>
    jQuery(document).ready(function(){

         $('#date-range').daterangepicker();


        $('#submit-btn').on('click', function(e){
            e.preventDefault();
            let productTable = $('product-table');
            let formData = new FormData();
            let author = $('#author option:selected').val(); 
            let product = $('#product option:selected').val(); 
            let daterange =  $('#date-range').val(); 
            let data = { 'author': author, 'product': product, 'daterange' : daterange }
            let url = "{{route('product.ajax.data')}}";
            $.ajax({
                 headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                url: url,
                type: 'post',
                data: data,
                success: function(data) {
                    var tr = '';
                    $.each(data, function(key, value){
                        console.log(value);
                        tr +='<tr><td>'+ (key+1) +'</td><td>'+ value.author_name +'</td><td>'+ value.name +'</td><td>'+ value.entry_date +'</td></tr>';
                    })

                     $('#product-table tbody').html(tr);
                    
                }
            });
        })
       
    })
</script>
@endsection
