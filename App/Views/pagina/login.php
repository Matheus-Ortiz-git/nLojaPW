<?=Sessao::mensagem('usuario')?>
        <div class="login-container">
            <h2>Login</h2>
            <form name="logar" method="POST" action="<?= URL ?>/pagina/login">

                <label for="username">Usuário: <sup class="text-danger">*</sup></label>
                <input type="email" id="email" placeholder="Digite seu Email" name="username" class='form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?>'>
                <div class='invalid-feedback'>
                        <?= $dados['email_erro'] ?>
                    </div>
                <label for="password">Senha: <sup class="text-danger">*</sup></label>
                <input type="password" id="password" placeholder="Digite sua Senha" name="password" class='form-control  <?= $dados['senha_erro'] ? 'is-invalid' : '' ?>'>
                <div class="invalid-feedback">
                        <?= $dados['senha_erro'] ?>
                    </div>
                <br>
                <button type="submit" value="Logar">Entrar</button>
            </form>
            <br>
            <a class="cadastro" href="<?=URL?>/usuarios/cadastrar" class="linK">Não tem uma conta? Cadastre-se aqui</a>
        </div>

        </div>
    </div>
</div>