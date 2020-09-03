@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark" style="color:white;">{{ __('Ajout d\'une fleur (Bulbeuse ou tubéreuse)') }}</div>

                <div class="card-body">
                <form method="POST" action="{{route('Bulbeuse.update',['Bulbeuse'=>$Bulbeuse->id])}}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom',$Bulbeuse->nom) }}" required autocomplete="nom" autofocus placeholder="Nom de la fleur">

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('URL de l\'image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image',$Bulbeuse->image) }}" required autocomplete="image" autofocus placeholder="URL de l image de la fleur">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('descritption') is-invalid @enderror" name="description" value="{{ old('description',$Bulbeuse->description) }}" required autocomplete="description" autofocus placeholder="Description de la fleur">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="nom_botanique" class="col-md-4 col-form-label text-md-right">{{ __('Nom botanique') }}</label>

                            <div class="col-md-6">
                                <input id="nom_botanique" type="text" class="form-control @error('nom_botanique') is-invalid @enderror" name="nom_botanique" value="{{ old('nom_botanique',$Bulbeuse->nom_botanique) }}" required autocomplete="nom_botanique" autofocus placeholder="Nom botanique de la fleur">

                                @error('nom_botanique')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="info_plante" class="col-md-4 col-form-label text-md-right">{{ __('Info plante') }}</label>

                            <div class="col-md-6">
                                <input id="info_plante" type="text" class="form-control @error('info_plante') is-invalid @enderror" name="info_plante" value="{{ old('info_plante',$Bulbeuse->info_plante) }}" required autocomplete="info_plante" autofocus placeholder="Informations sur la fleur">

                                @error('info_plante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="particularites" class="col-md-4 col-form-label text-md-right">{{ __('Particularités') }}</label>

                            <div class="col-md-6">
                                <input id="particularites" type="text" class="form-control @error('particularites') is-invalid @enderror" name="particularites" value="{{ old('particularites',$Bulbeuse->particularites) }}" required autocomplete="particularites" autofocus placeholder="Particularités de la fleur">

                                @error('particularites')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="avantages" class="col-md-4 col-form-label text-md-right">{{ __('Avantages') }}</label>

                            <div class="col-md-6">
                                <input id="avantages" type="text" class="form-control @error('avantages') is-invalid @enderror" name="avantages" value="{{ old('avantages',$Bulbeuse->avantages) }}" required autocomplete="avantages" autofocus placeholder="Avantages de la fleur">

                                @error('avantages')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exposition" class="col-md-4 col-form-label text-md-right">{{ __('Exposition') }}</label>

                            <div class="col-md-6">
                                <input id="exposition" type="text" class="form-control @error('exposition') is-invalid @enderror" name="exposition" value="{{ old('exposition',$Bulbeuse->exposition) }}" required autocomplete="exposition" autofocus placeholder="Exposition idéale">

                                @error('exposition')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="sol" class="col-md-4 col-form-label text-md-right">{{ __('Sol') }}</label>

                            <div class="col-md-6">
                                <input id="sol" type="text" class="form-control @error('sol') is-invalid @enderror" name="sol" value="{{ old('sol',$Bulbeuse->sol) }}" required autocomplete="sol" autofocus placeholder="Sol idéale">

                                @error('sol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quand_semer" class="col-md-4 col-form-label text-md-right">{{ __('Quand semer ?') }}</label>

                            <div class="col-md-6">
                                <input id="quand_semer" type="text" class="form-control @error('quand_semer') is-invalid @enderror" name="quand_semer" value="{{ old('quand_semer',$Bulbeuse->quand_semer) }}" required autocomplete="quand_semer" autofocus placeholder="Quand semer la fleur">

                                @error('quand_semer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="comment_semer" class="col-md-4 col-form-label text-md-right">{{ __('Comment semer ?') }}</label>

                            <div class="col-md-6">
                                <input id="comment_semer" type="text" class="form-control @error('comment_semer') is-invalid @enderror" name="comment_semer" value="{{ old('comment_semer',$Bulbeuse->comment_semer) }}" required autocomplete="comment_semer" autofocus placeholder="Comment semer la fleur">

                                @error('comment_semer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success" style="background-color:#54a169;">
                                    {{ __('Mettre a jour') }}
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection