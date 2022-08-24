<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Company Detail</h2>
            </div>
            <div>
                <a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mt-3">
                        <strong>Company Name : {{ $company->name }} </strong>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mt-3">
                        <strong>Company Email : {{ $company->email }}</strong>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mt-3" >
                        <strong>Company Address : {{ $company->address }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
