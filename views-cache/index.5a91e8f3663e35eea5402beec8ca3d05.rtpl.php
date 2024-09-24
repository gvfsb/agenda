<?php if(!class_exists('Rain\Tpl')){exit;}?><h1 id="main-title">Dados</h1>
    <table class="table" id="contacts-table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Contato:</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php $counter1=-1;  if( isset($contatos) && ( is_array($contatos) || $contatos instanceof Traversable ) && sizeof($contatos) ) foreach( $contatos as $key1 => $value1 ){ $counter1++; ?>
                <tr>
                    <td scope="row" class="col-id"><?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td scope="row"><?php echo htmlspecialchars( $value1["name_user"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td scope="row"><?php echo htmlspecialchars( $value1["data_user"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td class="actions">
                        <a href="<?php echo htmlspecialchars( $BASE_URL, ENT_COMPAT, 'UTF-8', FALSE ); ?>visualizar/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><i class="fas fa-eye check-icon"></i></a>
                        <a href="<?php echo htmlspecialchars( $BASE_URL, ENT_COMPAT, 'UTF-8', FALSE ); ?>editar/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?> ?&gt;"><i class="far fa-edit edit-icon"></i></a>
                        <form class="delete-form" action=/deletar/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?> method="POST">
                            <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</ul>