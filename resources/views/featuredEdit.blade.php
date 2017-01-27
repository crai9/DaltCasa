@extends('layouts.page')

@section('main')

<div class="container">
    <h2 class="post-title">Edit Featured</h2>
    <form class="form-horizontal" role="form" method="POST" action="/admin/featured/update">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a href="/admin">&laquo; Admin home</a>
                <div class="panel panel-default panel-spacing">
                    <div class="panel-body">
                        <div class="form-group{{ $errors->has('text1') ? ' has-error' : '' }}">
                            <label for="text1" class="col-md-4 control-label">Text 1</label>

                            <div class="col-md-6">
                                <input id="text1" type="text" class="form-control" name="text1" value="{{ empty(old('text1')) ? $text1 : old('text1') }}" required autofocus>

                                @if ($errors->has('text1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('image1') ? ' has-error' : '' }}">
                            <label for="image1" class="col-md-4 control-label">Image URL 1</label>

                            <div class="col-md-6">
                                <input id="image1" type="text" class="form-control" name="image1" value="{{ empty(old('image1')) ? $image1 : old('image1') }}" required>

                                @if ($errors->has('image1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('link1') ? ' has-error' : '' }}">
                            <label for="link1" class="col-md-4 control-label">Link URL 1</label>

                            <div class="col-md-6">
                                <input id="link1" type="text" class="form-control" name="link1" value="{{ empty(old('link1')) ? $link1 : old('link1') }}" required>

                                @if ($errors->has('link1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('link1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('type1') ? ' has-error' : '' }}">
                            <label for="type1" class="col-md-4 control-label">Type 1</label>

                            <div class="col-md-6">
                                <select id="type1" type="text" class="form-control" name="type1">
                                    <option @if( $type1 == "music") selected="selected" @endif value="music">Music</option>
                                    <option @if( $type1 == "book") selected="selected" @endif value="book">Article</option>
                                    <option @if( $type1 == "time") selected="selected" @endif value="time">Event</option>
                                    <option @if( $type1 == "random") selected="selected" @endif value="random">Other</option>
                                </select>
                                @if ($errors->has('type1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default panel-spacing">
                    <div class="panel-body">
                        <div class="form-group{{ $errors->has('text2') ? ' has-error' : '' }}">
                            <label for="text2" class="col-md-4 control-label">Text 2</label>

                            <div class="col-md-6">
                                <input id="text2" type="text" class="form-control" name="text2" value="{{ empty(old('text2')) ? $text2 : old('text2') }}" required autofocus>

                                @if ($errors->has('text2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('image2') ? ' has-error' : '' }}">
                            <label for="image2" class="col-md-4 control-label">Image URL 2</label>

                            <div class="col-md-6">
                                <input id="image2" type="text" class="form-control" name="image2" value="{{ empty(old('image2')) ? $image2 : old('image2') }}" required>

                                @if ($errors->has('image2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('link2') ? ' has-error' : '' }}">
                            <label for="link2" class="col-md-4 control-label">Link URL 2</label>

                            <div class="col-md-6">
                                <input id="link2" type="text" class="form-control" name="link2" value="{{ empty(old('link2')) ? $link2 : old('link2') }}" required>

                                @if ($errors->has('link2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('link2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('type2') ? ' has-error' : '' }}">
                            <label for="type2" class="col-md-4 control-label">Type 2</label>

                            <div class="col-md-6">
                                <select id="type2" type="text" class="form-control" name="type2">
                                    <option @if( $type2 == "music") selected="selected" @endif value="music">Music</option>
                                    <option @if( $type2 == "book") selected="selected" @endif value="book">Article</option>
                                    <option @if( $type2 == "time") selected="selected" @endif value="time">Event</option>
                                    <option @if( $type2 == "random") selected="selected" @endif value="random">Other</option>
                                </select>
                                @if ($errors->has('type2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default panel-spacing">
                    <div class="panel-body">
                        <div class="form-group{{ $errors->has('text3') ? ' has-error' : '' }}">
                            <label for="text3" class="col-md-4 control-label">Text 3</label>

                            <div class="col-md-6">
                                <input id="text3" type="text" class="form-control" name="text3" value="{{ empty(old('text3')) ? $text3 : old('text3') }}" required autofocus>

                                @if ($errors->has('text3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('image3') ? ' has-error' : '' }}">
                            <label for="image3" class="col-md-4 control-label">Image URL 3</label>

                            <div class="col-md-6">
                                <input id="image3" type="text" class="form-control" name="image3" value="{{ empty(old('image3')) ? $image3 : old('image3') }}" required>

                                @if ($errors->has('image3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('link3') ? ' has-error' : '' }}">
                            <label for="link3" class="col-md-4 control-label">Link URL 3</label>

                            <div class="col-md-6">
                                <input id="link3" type="text" class="form-control" name="link3" value="{{ empty(old('link3')) ? $link3 : old('link3') }}" required>

                                @if ($errors->has('link3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('link3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('type3') ? ' has-error' : '' }}">
                            <label for="type3" class="col-md-4 control-label">Type 3</label>

                            <div class="col-md-6">
                                <select id="type3" type="text" class="form-control" name="type3">
                                    <option @if( $type3 == "music") selected="selected" @endif value="music">Music</option>
                                    <option @if( $type3 == "book") selected="selected" @endif value="book">Article</option>
                                    <option @if( $type3 == "time") selected="selected" @endif value="time">Event</option>
                                    <option @if( $type3 == "random") selected="selected" @endif value="random">Other</option>
                                </select>
                                @if ($errors->has('type3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default panel-spacing">
                    <div class="panel-body">
                        <div class="form-group{{ $errors->has('text4') ? ' has-error' : '' }}">
                            <label for="text4" class="col-md-4 control-label">Text 4</label>

                            <div class="col-md-6">
                                <input id="text4" type="text" class="form-control" name="text4" value="{{ empty(old('text4')) ? $text4 : old('text4') }}" required autofocus>

                                @if ($errors->has('text4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text4') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('image4') ? ' has-error' : '' }}">
                            <label for="image4" class="col-md-4 control-label">Image URL 4</label>

                            <div class="col-md-6">
                                <input id="image4" type="text" class="form-control" name="image4" value="{{ empty(old('image4')) ? $image4 : old('image4') }}" required>

                                @if ($errors->has('image4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image4') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('link4') ? ' has-error' : '' }}">
                            <label for="link4" class="col-md-4 control-label">Link URL 4</label>

                            <div class="col-md-6">
                                <input id="link4" type="text" class="form-control" name="link4" value="{{ empty(old('link4')) ? $link4 : old('link4') }}" required>

                                @if ($errors->has('link4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('link4') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('type4') ? ' has-error' : '' }}">
                            <label for="type4" class="col-md-4 control-label">Type 4</label>

                            <div class="col-md-6">
                                <select id="type4" type="text" class="form-control" name="type4">
                                    <option @if( $type4 == "music") selected="selected" @endif value="music">Music</option>
                                    <option @if( $type4 == "book") selected="selected" @endif value="book">Article</option>
                                    <option @if( $type4 == "time") selected="selected" @endif value="time">Event</option>
                                    <option @if( $type4 == "random") selected="selected" @endif value="random">Other</option>
                                </select>
                                @if ($errors->has('type4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type4') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default panel-spacing">
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection