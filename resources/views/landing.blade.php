@extends('layout.app')

@section('content')
    <style>
        .div{
            padding-top: 5rem;
        }

        h1{
            text-align: center;
            font-family: Algerian; 
            font-size: 100px;
        }

        h2{
            text-align: center;
            font-family: Algerian; 
            font-size: 100px;
        }

        #credits{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
            padding-top: 0.3rem;
            padding-bottom: 0.3rem;
            font-family: Garamond;
        }
    </style>

    
    <html>
        <body>
            <div class="div">
                <h1>Welcome</h1>
                <h2>To</h2>
                <h1>Event Registration System</h1>
            </div>
        </body>

        <footer>
            <div id="credits" class="table-dark">© Carl Angelo Matias Maniangap</div>
        </footer>    

    </html>

@endsection

@section('title')
    Landing Page
@endsection