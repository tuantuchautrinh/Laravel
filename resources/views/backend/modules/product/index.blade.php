{{--- @extends là trong master.blade.php có gì thì được thừa hưởng hết ---}}
@extends ('backend.master')
@section('content')

@if(session('thanhcong'))
        <div class="result_msg">
            {{ session('thanhcong') }}
        </div>
    @endif

    <table class="list_table">
        <tr class="list_heading">
            <td class="id_col">STT</td>
            <td>Tên sản phẩm</td>
            <td>Giá</td>
            <td>Thời Gian</td>
            <td class="action_col">Quản lý?</td>
        </tr>

        <!--- products được truyên qua từ (LaravelProject/app/Http/Controllers/Backend/ProductController.php) --->
        @foreach($products as $item)
        <tr class="list_data">
            {{--- $loop->iteration là mặc định không bao giờ thay đổi và tăng từ 1 đến n ---}}
            <td class="aligncenter">{{ $loop->iteration }}</td>
            <td class="list_td aligncenter">{{ $item->name }}</td>
            <td class="list_td aligncenter">{{ number_format($item->price,0,",",".") }}</td>
            {{--- change the date format in laravel view page at "92 check" ---}}
            <td class="list_td aligncenter">{{ date('d-m-Y | H:m:i', strtotime($item->created_at)) }}</td>
            <td class="list_td aligncenter">
                <a href=""><img src="{{ asset('backend/images/edit.png') }}" /></a>&nbsp;&nbsp;&nbsp;
                <a href=""><img src="{{ asset('backend/images/delete.png') }}" /></a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
