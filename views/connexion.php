<div class="container h-100">
    <form class="h-100" action="/connexion_traitement" method="POST">
        <div class="row h-100 justify-content-center flex-column align-items-center">
            <?php if(!empty($message)): ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <?= $message ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Connexion</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-sm btn-success mt-3">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>