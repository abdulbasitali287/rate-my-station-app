@extends('layout.main')

@section('content')

<section>
    <div class="container">
        <div class="row bg-white my-4 px-4" style="border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
            <div class="col-12" style="border-bottom: 1px solid #BDBDBD;">
                <h1 class="py-3" style="font-weight: bold;font-size: 36px;">Fill out the form with the Station information</h1>
            </div>
            <div class="col-12 pt-3">
                <div class="row">
                    <div class="col-md-6">
                        <x-user.form-group label="What’s the name of the Station?" placeholder="Type your usename here..." />
                        <x-user.form-group label="What State/Providence is this Station located in?" placeholder="Type Station location here..." />
                        <x-user.form-group label="Enter your email" placeholder="Type  your email here..." />
                    </div>
                    <div class="col-md-6">
                        <div class="form-group py-4">
                            <x-user.label label="Station category:" />
                            <div style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                                <label for="#" style="display: inline-block;padding-inline: 12px;"><img src="{{ asset('user/assets/vectors/tv-vector.png') }}" alt=""></label>
                                <select name="" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                    <option value="" selected>TV News</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <x-user.form-group label="Enter the Station’s email" placeholder="Type Station’s email here..." />
                        <x-user.form-group label="What’s Station’s website link" placeholder="Type Station’s website link here..." />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="py-4">
                            <x-user.button type="submit" buttonText="Submit" />
                            <x-user.button type="button" buttonText="Cancel" class="bg-white" color="#194D79"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <x-user.checkbox label="Terms & conditions" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
