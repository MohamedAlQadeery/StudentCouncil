@extends('base_layout._layout')

@section('body')

    <div class="row">
        <div class="portlet light portlet-fit bordered">

            <form action="">


                <div class="form-group">
                    <label for="first_name">@lang('lang.First Name')</label>
                    <input type="text" class="form-control" name="first_name">
                </div>
                <div class="form-group">
                    <label for="last">@lang('lang.Last Name')</label>
                    <input type="text" class="form-control" name="last_name">
                </div>
                <div class="form-group">
                    <label for="email">@lang('lang.email')</label>
                    <input type="text" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label for="password">@lang('lang.password')</label>
                    <input type="text" class="form-control" name="password">
                </div>


                <div class="action">
                    <input type="submit" value="@lang('lang.submit')">
                    <input type="reset" value="@lang('lang.cancel')">
                </div>
            </form>

        </div>
    </div>

@endsection