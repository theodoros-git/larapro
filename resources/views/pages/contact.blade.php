@extends('/layouts/layoutstruct', ['title' => 'Contactez-Nous'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2 style=" ">Contactez-Nous</h2>
                <p class="text-muted">Si vous aviez des problèmes avec nos services, Veuillez les poser <a href="mailto:kossitheodore@gmail.com">ici</a></p>
                <form action="{{ route('contact_path') }}" method="post" novalidate>
                    <div class="form-group">
                        <label for="name" class="control-label">Votre Nom</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Votre Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="msg" class="control-label ">Votre Message</label>
                        <textarea name="msg" id="msg  " cols="10" rows="10" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block">Soumettre &raquo; </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop