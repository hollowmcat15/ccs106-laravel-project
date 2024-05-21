@extends('layout.pagelayout')

@section('content')

<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        text-align: center;
    }
    h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }
    p {
        font-size: 18px;
        margin-bottom: 20px;
    }
    .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #585858;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .button:hover {
        background-color: #242424;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Welcome to My School</h1>
    <p>Empowering Minds, Building a Brighter Future</p>
    <a href="/aboutus" class="button">About Our School</a>
</div>
</body>

@endsection
