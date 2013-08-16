<? setlocale(LC_MONETARY, 'pt_BR'); ?>
<div class="row">
	<div class="c12">
		<form method='get' action=''>
            <ul class='select-tipo'>
                <li> 
                    <?php
                        echo $this->Html->link(
                            'Ativos',
                            array(
                                'controller' => 'Imovels',
                                'action' => 'index',
                                'admin' => true,
                                '?' => array(
                                    'filtro' => 1
                                ) 
                            )
                        );
                    ?>
                </li>
                <li> 
                    <?php
                        echo $this->Html->link(
                            'Inativos',
                            array(
                                'controller' => 'Imovels',
                                'action' => 'index',
                                'admin' => true,
                                '?' => array(
                                    'filtro' => 0
                                ) 
                            )
                        );
                    ?>
                </li>
                <li> 
                    <?php
                        echo $this->Html->link(
                            'Todos',
                            array(
                                'controller' => 'Imovels',
                                'action' => 'index',
                                'admin' => true 
                            )
                        );
                    ?>
                </il>
                <li> <input type='text' name='codigo' placeholder='Procurar por Código'></li>
                <li> <input type='text' name='street' placeholder='Procurar por Rua' style='width: 400px;'></li>
                <li> <input type='submit' value='procurar'></li>
            </ul>
        </form>
	</div>
</div>

<?php echo $this->element('/admin/paginacao'); ?>

<section class='clear'>
	<? foreach( $imovels as $imovel): ?>
		<section class="row fix detalhes">
			<article class="c3 detalhes-image">
				<figure>
					<img src='/img/pic-sample.png' alt='' title=''>
					<figcaption>
						<a href='#' class='botao'> Montrar Outras Fotos </a>
					</figcaption>
				</figure>
			</article>
			<article class="c3">
				<dl class='small-info'>
					<dt>Status:</dt>   
                        <dd><?php if( $imovel['Imovel']['status'] == 1  ) { echo '<a href="" class="btn btn-active"> Ativo </a>'; }else{ echo '<a href="" class="btn btn-deactive"> Desativado </a>'; } ?></dd><br/>
					<dt>Código:</dt>   
                        <dd><?php if( !empty($imovel['Imovel']['codigo'] ) ) { echo $imovel['Imovel']['codigo']; } ?></dd><br/>
					<dt>Visitas:</dt>  
                        <dd><?php if( !empty($imovel['Imovel']['visitas'] ) ) { echo $imovel['Imovel']['visitas']; }else{ echo 0; } ?></dd><br/>
                    <dt>Categoria:</dt>
                        <dd><?php if( !empty($imovel['Categoria']['name'] ) ) { echo $imovel['Categoria']['name']; } ?></dd><br/>
                    <dt>Tipo:</dt>     
                        <dd><?php if( !empty($imovel['Tipo']['name'] ) ) { echo $imovel['Tipo']['name']; } ?></dd><br/>
					<dt>Contrato:</dt> 
                        <dd><?php if( !empty($imovel['Contrato']['name'] ) ) { echo $imovel['Contrato']['name']; } ?></dd><br/>
					<dt>Corretor:</dt> 
                        <dd><?php if( !empty($imovel['Corretores']['nome'] ) ) { echo $imovel['Corretores']['nome']; } ?></dd><br/>
				</dl>
			</article>
			<article class="c3">
                <dl class='medium-info row fix'>
                    <dt>Endereço:</dt>   
                        <dd> 
                            <?php echo $imovel['Address']['endereco']; ?>
                        </dd>
                    <dt>Referência:</dt>   
                        <dd> 
                            <?php echo $imovel['Address']['referencia']; ?>
                        </dd>
                    <dt>Cidade:</dt>  
                        <dd>
                            <?php echo $imovel['Address']['Cidade']['cidade']; ?> / <?php echo $imovel['Address']['Estado']['estados']; ?>
                        </dd>
                    <dt>Bairro:</dt>
                        <dd> 
                            <?php echo $imovel['Address']['Bairro']['bairro']; ?>
                        </dd>
                    <dt>Valor:</dt>     
                        <dd> 
                            <?php echo 'R$: ' . number_format($imovel['Valore']['valor'], 2 ); ?>
                        </dd>
                    <dt>IPTU:</dt> 
                        <dd> 
                            <?php echo 'R$: ' . number_format($imovel['Valore']['iptu'], 2 ); ?>
                        </dd>
                    <dt>Condomínio:</dt> 
                        <dd> 
                            <?php echo 'R$: ' . number_format($imovel['Valore']['condominio'], 2 ); ?>
                        </dd>
                </dl>				
			</article>
			<aside class="c3">
                <ul>
                    <li class='buttons'> <strong> <a href=''> <img src="/img/gCons/print.png" alt="" />Imprimir </a> </strong> </li>
                    <li class='buttons'> <strong> <a href=''> <img src="/img/gCons/configuration.png" alt="" />Detalhes </a> </strong> </li>
                    <li class='buttons'> <strong> <a href=''> <img src="/img/gCons/edit.png" alt="" /> Editar </a> </strong> </li>
                    <li class='buttons'> <strong> <a href=''> <img src="/img/gCons/next-item.png" alt="" /> Enviar Para Clientes </a> </strong> </li>
                    <li class='buttons'> <strong> <a href=''> <img src="/img/gCons/delete-item.png" alt="" /> Deletar </a> </strong> </li>
                    <li class='buttons'> <strong> <a href=''> <img src="/img/gCons/flag.png" alt="" /> Sem Placa </a> </strong> </li>
                </ul>
            </aside>
		</section>

        <div style='text-align: left; font-size: 10px'>
            <? //pr($imovel); ?>
        </div>
        <!-- Tabs para Comentarios -->
        <section class='row fix'>
    		<article class='c12'>
                <div class='tabs'>
        			<ul>
        				<li class='active'><a href=".tab1"> Observações Internas </a></li>
        				<li><a href=".tab2"> Observações de Detalhes </a></li>
        				<li><a href=".tab3"> Observações de Contrato </a></li>
        				<li><a href=".tab4"> Observações de Lazer </a></li>
        				<li><a href=".tab5"> Observações de Endereço </a></li>
        			</ul>
        		</div>
        		<section id="tab1" class='tab tab1'>
                    <span class='data'> 28/07/2013 - 14:32 </span> | <strong> Corretor: </strong> Mensagem deixada pelo corretors sobre o assunto.    
                </section>
        		<section id="tab2" class='tab tab2'>
                    <span class='data'> 28/07/2013 - 14:32 </span> | <strong> Corretor: </strong> Mensagem deixada pelo corretors sobre o assunto 2.    
                </section>
        		<section id="tab3" class='tab tab3'>
                    <span class='data'> 28/07/2013 - 14:32 </span> | <strong> Corretor: </strong> Mensagem deixada pelo corretors sobre o assunto 3.    
                </section>
        		<section id="tab4" class='tab tab4'>
                    <span class='data'> 28/07/2013 - 14:32 </span> | <strong> Corretor: </strong> Mensagem deixada pelo corretors sobre o assunto 4.    
                </section>
        		<section id="tab5" class='tab tab5'>
                    <span class='data'> 28/07/2013 - 14:32 </span> | <strong> Corretor: </strong> Mensagem deixada pelo corretors sobre o assunto 5.    
                </section>
            </article>
        </section>

	<? endforeach; ?>
</section>

<?php echo $this->element('/admin/paginacao'); ?>