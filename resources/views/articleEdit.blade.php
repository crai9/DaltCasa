@extends('layouts.page')

@section('main')

<div class="container">

        <h1 class="post-title">Edit Article</h1>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a href="/admin">&laquo; Admin home</a>
                <div class="panel panel-default panel-spacing">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/admin/article/{{ $article->id }}/update">
                            {{ csrf_field() }}
                            <input  type="hidden" name="id" value="{{ $article->id }}" required>
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ empty(old('title')) ? $article->title : old('title') }}" required autofocus>

                                    @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('introduction') ? ' has-error' : '' }}">
                                <label for="introduction" class="col-md-4 control-label">Introduction</label>

                                <div class="col-md-6">
                                    <textarea id="introduction" rows="2" type="text" class="form-control" name="introduction" required>{{ empty(old('introduction')) ? $article->introduction : old('introduction') }}</textarea>

                                    @if ($errors->has('introduction'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('introduction') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="body" class="col-md-4 control-label"></label>
                                <div class="col-md-6">
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        Show formatting info
                                    </button>

                                    <div class="collapse margin-top-15" id="collapseExample">
                                        <div class="well well-lg" style="white-space: pre-line;">
                                            <b>Links:</b>

                                            [Text to show for link](https://www.google.com)
                                            or
                                            [https://www.google.com]

                                            <b>Images:</b>

                                            ![image text](http://daltcasa.com/img/dc.png)

                                            <b>Header Texts:</b>

                                            # Largest text
                                            ## 2nd largest text
                                            ### 3rd largest text
                                            #### 4th largest text
                                            ##### 5th largest text
                                            ###### 6th largest text

                                            <b>Numbered List:</b>

                                            1. First ordered list item
                                            2. Another item

                                            <b>Bullet points:</b>

                                            * First item
                                            * Second item

                                            <b>Emphasis:</b>

                                            *Bold*
                                            _Italics_
                                            ~~Strikethrough~~

                                            <b>Quotes:</b>

                                            > Blockquotes are very handy in email to emulate reply text.
                                            > This line is part of the same quote.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <label for="body" class="col-md-4 control-label">Body</label>

                                <div class="col-md-6">
                                    <textarea id="body" rows="12" class="form-control" name="body" required>{{ empty(old('body')) ? $article->body : old('body') }}</textarea>

                                    @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                                <label for="category" class="col-md-4 control-label">Category</label>

                                <div class="col-md-3">
                                    <select id="category-drop" class="form-control" name="category-drop">
                                        <option value="0">Pick Existing Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->category }}">{{ $category->category }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category-drop'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('category-drop') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-3">
                                    <input id="category" value=" {{ empty(old('category')) ? $article->category : old('category') }}" class="form-control" placeholder="Or enter new Category" name="category">

                                    @if ($errors->has('category'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('category') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            @if($article->published == 0)
                            <div class="form-group{{ $errors->has('publish') ? ' has-error' : '' }}">
                                <label for="publish" class="col-md-4 control-label">Publish?</label>

                                <div class="col-md-6">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="publish" id="optionsRadios1" value="yes" {{ $article->published == 1 ? 'checked' : '' }}>
                                            yes
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="publish" id="optionsRadios2" value="no" {{ $article->published == 1 ? '' : 'checked' }}>
                                            no
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection