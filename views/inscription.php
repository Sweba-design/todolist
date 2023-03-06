<div class="container">
    <form action="/inscription_traitement" method="POST">
        <div class="row">
            <div class="col-md-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="firstname" class="form-label">Prénom</label>
                <input type="text" id="firstname" name="firstname" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="col-md-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-end">
                <button type="submit" class="btn btn-success mt-3">Envoyer</button>
            </div>
        </div>

    </form>
</div>