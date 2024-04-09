<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Quản lý học sinh</title>
</head>
<body>
    <div class="container">
        <h3 class="mt-3">Quản lý học sinh</h3>
        <form action="{{ route('search') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" id="searchInput" name="search" value="{{ isset($search) ? $search : '' }}" placeholder="Tìm kiếm" aria-label="Tìm kiếm" aria-describedby="button-addon2">
                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </div>
        </form>

        @if(session("msg"))
            <div class="alert alert-success">{{ session('msg') }}</div>
        @endif

        <a href="{{ route('create') }}" class="btn btn-primary mb-3">Thêm mới</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên học sinh</th>
                    <th>Số điện thoại</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($listStudents))
                    @foreach($listStudents as $index => $student)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>
                                <a href="{{ route('edit', ['id' => $student->id]) }}" class="btn btn-primary btn-sm">Sửa</a>
                            </td>
                            <td>
                                <a href="{{ route('delete', ['id' => $student->id]) }}" class="btn btn-danger btn-sm">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</body>
</html>
