<div class="row">
	<div class="c12">
		a
	</div>
</div>

<section>
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
                        <dd><?php if( !empty($imovel['Imovel']['status'] ) ) { echo $imovel['Imovel']['status']; } ?></dd><br/>
					<dt>Código:</dt>   
                        <dd><?php if( !empty($imovel['Imovel']['codigo'] ) ) { echo $imovel['Imovel']['codigo']; } ?></dd><br/>
					<dt>Visitas:</dt>  
                        <dd><?php if( !empty($imovel['Imovel']['visitas'] ) ) { echo $imovel['Imovel']['visitas']; } ?></dd><br/>
                    <dt>Categoria:</dt>
                        <dd><?php if( !empty($imovel['Imovel']['Categoria']['nm_cat'] ) ) { echo $imovel['Imovel']['Categoria']['nm_cat']; } ?></dd><br/>
                    <dt>Tipo:</dt>     
                        <dd><?php if( !empty($imovel['Imovel']['Tipo']['nm_tipo'] ) ) { echo $imovel['Imovel']['Tipo']['nm_tipo']; } ?></dd><br/>
					<dt>Contrato:</dt> 
                        <dd><?php if( !empty($imovel['Imovel']['Contrato']['nm_contrato'] ) ) { echo $imovel['Imovel']['Contrato']['nm_contrato']; } ?></dd><br/>
					<dt>Corretor:</dt> 
                        <dd><?php if( !empty($imovel['Imovel']['User']['login'] ) ) { echo $imovel['Imovel']['User']['login']; } ?></dd><br/>
				</dl>
			</article>
			<article class="c3">
                <dl class='small-info'>
                    <dt>Status:</dt>   
                        <dd><?php if( !empty($imovel['Imovel']['status'] ) ) { echo $imovel['Imovel']['status']; } ?></dd><br/>
                    <dt>Código:</dt>   
                        <dd><?php if( !empty($imovel['Imovel']['codigo'] ) ) { echo $imovel['Imovel']['codigo']; } ?></dd><br/>
                    <dt>Visitas:</dt>  
                        <dd><?php if( !empty($imovel['Imovel']['visitas'] ) ) { echo $imovel['Imovel']['visitas']; } ?></dd><br/>
                    <dt>Categoria:</dt>
                        <dd><?php if( !empty($imovel['Imovel']['Categoria']['nm_cat'] ) ) { echo $imovel['Imovel']['Categoria']['nm_cat']; } ?></dd><br/>
                    <dt>Tipo:</dt>     
                        <dd><?php if( !empty($imovel['Imovel']['Tipo']['nm_tipo'] ) ) { echo $imovel['Imovel']['Tipo']['nm_tipo']; } ?></dd><br/>
                    <dt>Contrato:</dt> 
                        <dd><?php if( !empty($imovel['Imovel']['Contrato']['nm_contrato'] ) ) { echo $imovel['Imovel']['Contrato']['nm_contrato']; } ?></dd><br/>
                    <dt>Corretor:</dt> 
                        <dd><?php if( !empty($imovel['Imovel']['User']['login'] ) ) { echo $imovel['Imovel']['User']['login']; } ?></dd><br/>
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