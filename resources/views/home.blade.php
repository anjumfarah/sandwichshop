 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sandwich Shop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class = "bg-light text-dark" > 
        <div class = "container">
            <div class="row">
                <h1 class ="display-4">Welcome to Sandwich Shoppe</h1>
            </div>   
        </div>
        <div class = "container">
            <div class="row">
                <div class="col-xs-12">
                    <p class="lead">
                        Hi there! Pay only for what you eat. We offer a wide variety of meats and veggie toppings.The bread for sandwich costs only a dollar. Let's get started with your order.
                    </p>
                </div>
            </div>
            <div class="content">
            <div class = "row">
                <div class="col-xs-12">
                    <div class="">
                        <p class="lead"> Customize your order by choosing your own toppings. </p>
                    </div>
                </div>
            </div>
            <div class= "needs-validation">
            {!! Form::open(['class' => '', 'id' => 'sandwichForm', 'method' => 'GET', 'route' => ['calculateprice']]) !!}
                @if (count($errors))
                    <div class="form-group">
                        <div class="alert alert-danger">
                            <ul style="list-style-type:none;">
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <div class = "row">
                    <div class="form-text col-md-6">
                        {!! Form::label('First Name :',null) !!}
                        {!! Form::text('first_name','',array('required' => 'required')) !!}
                    
                    </div>
                    <div class="form-text col-md-6">
                        {!! Form::label('Last Name:',null) !!}
                        {!! Form::text('last_name','',array('required' => 'required')) !!}
                    </div>
                </div>
                <br>
                <div class = "card-deck mb-6 ">
                    <div class="form-check col-md-6 card">
                        <div class = "card-header">
                            <p> Meat</p>
                        </div>
                        <div class="card-body">
                        <ul style="list-style-type:none;">
                            <li>{!! Form::checkbox('meat[]', '2') !!}
                                {!! Form::label('Chicken - $2', null) !!}
                            </li>
                            <li>{!! Form::checkbox('meat[]', '3') !!}
                                {!! Form::label('MeatBalls - $3', null) !!}
                            </li>
                            <li>{!! Form::checkbox('meat[]', '6') !!}
                                {!! Form::label('Duck - $6', null) !!}
                            </li>
                            <li>{!! Form::checkbox('meat[]', '4') !!}
                                {!! Form::label('Pulled Pork - $4', null) !!}
                            </li>
                            <li>{!! Form::checkbox('meat[]', '4') !!}
                                {!! Form::label('Cajun Black Bean - $4', null) !!}
                            </li>
                        </ul>
                        </div>
                    </div>
                    <div class="form-check col-md-6 card">
                        <div class = "card-header">
                            <p> Toppings </p>
                        </div>
                        <div class = "card-body">
                        <ul style="list-style-type:none;">
                            <li>{!! Form::checkbox('toppings[]', '0.50') !!}
                                {!! Form::label('Cheese - $0.50', null) !!}
                            </li>
                            <li>{!! Form::checkbox('toppings[]', '0.75') !!}
                                {!! Form::label('Mushrooms - $0.75', null) !!}
                            </li>
                            <li>{!! Form::checkbox('toppings[]', '0.25') !!}
                                {!! Form::label('Lettuce - $0.25', null) !!}
                            </li>
                            <li>{!! Form::checkbox('toppings[]', '0.50') !!}
                                {!! Form::label('Green Peppers - $0.50', null) !!}
                            </li>
                            <li>{!! Form::checkbox('toppings[]', '0.75') !!}
                                {!! Form::label('Vinegar - $0.75', null) !!}
                            </li>
                            <li>{!! Form::checkbox('toppings[]', '1.25') !!}
                                {!! Form::label('Habanero Jam - $1.25', null) !!}
                            </li>
                            <li>{!! Form::checkbox('toppings[]', '0.001') !!}
                                {!! Form::label('Mayo - $0.001', null) !!}
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
                <br>
                <div class = "row text-center">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-success btn-lg"> Calculate </button> 
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
            <hr>
            @if(!empty($attributes))
                <div class="row">
                    <div class="col text-center">
                        <p class="lead">
                            Hello <i><b>{{$attributes[0]}}  {{$attributes[1]}}!</b></i> Enjoy your meal<br> 
                            Here's your total cost. <br>
                            Bread : $1 <br>
                            @if($attributes[2] != 0)
                                Meat : ${{$attributes[2]}}<br>
                            @endif
                            Toppings : ${{ $attributes[3]}}<br>
                            Tax@9.00% : ${{ $attributes[5] }} <br>
                            <b>Total : ${{ $attributes[4]}}</b>
                        </p>  
                    </div> 
                </div>
            @endif
            </div>         
        </div>
    </body>
</html>
