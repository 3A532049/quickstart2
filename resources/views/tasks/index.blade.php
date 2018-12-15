<!--首先 @extends 指令會告知 Blade，我們使用定義於 resources/views/layouts/app.blade.php 的佈局。所有在 @section('content') 及 @endsection 之間的內容會被注入到 app.blade.php 佈局中的 @yield('content') 位置裡。-->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap 樣板... -->

    <div class="panel-body">
        <!-- 顯示驗證錯誤,載入位於 resources/views/common/errors.blade.php 的模板 -->
    @include('common.errors')

    <!-- 新任務的表單 -->
        <form action="/task" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- 任務名稱 -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">任務</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- 增加任務按鈕-->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> 增加任務
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- 代辦：目前任務 -->
@endsection