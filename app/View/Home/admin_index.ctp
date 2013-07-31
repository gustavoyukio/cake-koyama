<div class='canvas row fix'>
    <form class='c12 home-form' action='' method='POST'>
        <div class='formSep'>
            <input type="text" class='form-id'  id='codigo' value='' name='procurar-codigo' placeholder='Id do Imóvel' />
            <input type="text" class='form-str' value='' name='procurar-rua'    placeholder='Digite a Rua Desejada' />
            <input type='button' value='Procurar' class='' />
        </div>
    </form>
</div>

<div class="span12 tac">
    <ul class="ov_boxes">
        <li>
            <div class="canvas"><span style="display: none;">2,4,9,7,12,8,16</span><canvas></canvas></div>
            <div class="canvas"><span style="display: none;">1,4,-20,7,90</span><canvas></canvas></div>
        </li>
    </ul>
</div>

<div class='quick row fix'>
    <div class='c2 c2-links'>
        <ul>
            <li>
                <a href=''> <i class="splashy-calendar_month_up"></i> Adicionar Imóvel </a>
            </li>
        </ul>
    </div>
    <div class='c2 c2-links'>
        <ul>
            <li>
                <?php
                    echo $this->Html->link(
                        $this->Html->tag('i','&nbsp;', array('class' => 'splashy-folder_modernist_type_movie')). 'Listar Imóveis',
                        array(
                            'controller' =>'Imovels',
                            'action' =>'index'
                        ),
                        array(
                            'escape' => false
                        )
                    );
                ?>
            </li>
        </ul>
    </div>
    <div class='c2 c2-links'>
        <ul>
            <li>
                <a href=''> <i class="splashy-printer"></i> Enviar CLassificados </a>
            </li>
        </ul>
    </div>
    <div class='c2 c2-links'>
        <ul>
            <li>
                <a href=''> <i class="splashy-contact_blue_add"></i> Relatório Similares </a>
            </li>
        </ul>
    </div>
    <div class='c2 c2-links'>
        <ul>
            <li>
                <a href=''> <i class="splashy-hcards_down"></i> Relatório de Visitas </a>
            </li>
        </ul>
    </div>
    <div class='c2 c2-links'>
        <ul>
            <li>
                <a href=''> <i class="splashy-group_blue_add"></i> Adicionar Usuário </a>
            </li>
        </ul>
    </div>
</div>

<div class='info row fix'>
    <section class='c6'>
        <h3 class='heading'> Imóveis mais visitados </h3>
        <table class="table table-striped table-bordered mediaTable activeMediaTable" id="MediaTable-0">
            <thead>
                <tr>
                    <th class="optional" id="MediaTable-0-mediaTableCol-0">id</th>
                    <th class="essential persist" id="MediaTable-0-mediaTableCol-1">Customer</th>
                    <th class="optional" id="MediaTable-0-mediaTableCol-2">Status</th>
                    <th class="optional" id="MediaTable-0-mediaTableCol-3">Date Added</th>
                    <th class="essential" id="MediaTable-0-mediaTableCol-4">Total</th>
                    <th class="essential" id="MediaTable-0-mediaTableCol-5">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td headers="MediaTable-0-mediaTableCol-0" class="optional">134</td>
                    <td headers="MediaTable-0-mediaTableCol-1" class="essential persist">Summer Throssell</td>
                    <td headers="MediaTable-0-mediaTableCol-2" class="optional">Pending</td>
                    <td headers="MediaTable-0-mediaTableCol-3" class="optional">24/04/2012</td>
                    <td headers="MediaTable-0-mediaTableCol-4" class="essential">$120.23</td>
                    <td headers="MediaTable-0-mediaTableCol-5" class="essential">
                        <a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
                        <a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
                        <a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
                    </td>
                </tr>
                <tr>
                    <td headers="MediaTable-0-mediaTableCol-0" class="optional">133</td>
                    <td headers="MediaTable-0-mediaTableCol-1" class="essential persist">Declan Pamphlett</td>
                    <td headers="MediaTable-0-mediaTableCol-2" class="optional">Pending</td>
                    <td headers="MediaTable-0-mediaTableCol-3" class="optional">23/04/2012</td>
                    <td headers="MediaTable-0-mediaTableCol-4" class="essential">$320.00</td>
                    <td headers="MediaTable-0-mediaTableCol-5" class="essential">
                        <a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
                        <a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
                        <a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
                    </td>
                </tr>
                <tr>
                    <td headers="MediaTable-0-mediaTableCol-0" class="optional">132</td>
                    <td headers="MediaTable-0-mediaTableCol-1" class="essential persist">Erin Church</td>
                    <td headers="MediaTable-0-mediaTableCol-2" class="optional">Pending</td>
                    <td headers="MediaTable-0-mediaTableCol-3" class="optional">23/04/2012</td>
                    <td headers="MediaTable-0-mediaTableCol-4" class="essential">$44.00</td>
                    <td headers="MediaTable-0-mediaTableCol-5" class="essential">
                        <a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
                        <a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
                        <a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
                    </td>
                </tr>
                <tr>
                    <td headers="MediaTable-0-mediaTableCol-0" class="optional">131</td>
                    <td headers="MediaTable-0-mediaTableCol-1" class="essential persist">Koby Auld</td>
                    <td headers="MediaTable-0-mediaTableCol-2" class="optional">Pending</td>
                    <td headers="MediaTable-0-mediaTableCol-3" class="optional">22/04/2012</td>
                    <td headers="MediaTable-0-mediaTableCol-4" class="essential">$180.20</td>
                    <td headers="MediaTable-0-mediaTableCol-5" class="essential">
                        <a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
                        <a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
                        <a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
                    </td>
                </tr>
                <tr>
                    <td headers="MediaTable-0-mediaTableCol-0" class="optional">130</td>
                    <td headers="MediaTable-0-mediaTableCol-1" class="essential persist">Anthony Pound</td>
                    <td headers="MediaTable-0-mediaTableCol-2" class="optional">Pending</td>
                    <td headers="MediaTable-0-mediaTableCol-3" class="optional">20/04/2012</td>
                    <td headers="MediaTable-0-mediaTableCol-4" class="essential">$610.42</td>
                    <td headers="MediaTable-0-mediaTableCol-5" class="essential">
                        <a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
                        <a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
                        <a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>        
    </section>
    <section class='c6'>
        <h3 class='heading'> Seus imóveis mais visitados </h3>
        <table class="table table-striped table-bordered mediaTable activeMediaTable" id="MediaTable-0">
            <thead>
                <tr>
                    <th class="optional" id="MediaTable-0-mediaTableCol-0">id</th>
                    <th class="essential persist" id="MediaTable-0-mediaTableCol-1">Customer</th>
                    <th class="optional" id="MediaTable-0-mediaTableCol-2">Status</th>
                    <th class="optional" id="MediaTable-0-mediaTableCol-3">Date Added</th>
                    <th class="essential" id="MediaTable-0-mediaTableCol-4">Total</th>
                    <th class="essential" id="MediaTable-0-mediaTableCol-5">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td headers="MediaTable-0-mediaTableCol-0" class="optional">134</td>
                    <td headers="MediaTable-0-mediaTableCol-1" class="essential persist">Summer Throssell</td>
                    <td headers="MediaTable-0-mediaTableCol-2" class="optional">Pending</td>
                    <td headers="MediaTable-0-mediaTableCol-3" class="optional">24/04/2012</td>
                    <td headers="MediaTable-0-mediaTableCol-4" class="essential">$120.23</td>
                    <td headers="MediaTable-0-mediaTableCol-5" class="essential">
                        <a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
                        <a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
                        <a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
                    </td>
                </tr>
                <tr>
                    <td headers="MediaTable-0-mediaTableCol-0" class="optional">133</td>
                    <td headers="MediaTable-0-mediaTableCol-1" class="essential persist">Declan Pamphlett</td>
                    <td headers="MediaTable-0-mediaTableCol-2" class="optional">Pending</td>
                    <td headers="MediaTable-0-mediaTableCol-3" class="optional">23/04/2012</td>
                    <td headers="MediaTable-0-mediaTableCol-4" class="essential">$320.00</td>
                    <td headers="MediaTable-0-mediaTableCol-5" class="essential">
                        <a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
                        <a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
                        <a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
                    </td>
                </tr>
                <tr>
                    <td headers="MediaTable-0-mediaTableCol-0" class="optional">132</td>
                    <td headers="MediaTable-0-mediaTableCol-1" class="essential persist">Erin Church</td>
                    <td headers="MediaTable-0-mediaTableCol-2" class="optional">Pending</td>
                    <td headers="MediaTable-0-mediaTableCol-3" class="optional">23/04/2012</td>
                    <td headers="MediaTable-0-mediaTableCol-4" class="essential">$44.00</td>
                    <td headers="MediaTable-0-mediaTableCol-5" class="essential">
                        <a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
                        <a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
                        <a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
                    </td>
                </tr>
                <tr>
                    <td headers="MediaTable-0-mediaTableCol-0" class="optional">131</td>
                    <td headers="MediaTable-0-mediaTableCol-1" class="essential persist">Koby Auld</td>
                    <td headers="MediaTable-0-mediaTableCol-2" class="optional">Pending</td>
                    <td headers="MediaTable-0-mediaTableCol-3" class="optional">22/04/2012</td>
                    <td headers="MediaTable-0-mediaTableCol-4" class="essential">$180.20</td>
                    <td headers="MediaTable-0-mediaTableCol-5" class="essential">
                        <a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
                        <a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
                        <a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
                    </td>
                </tr>
                <tr>
                    <td headers="MediaTable-0-mediaTableCol-0" class="optional">130</td>
                    <td headers="MediaTable-0-mediaTableCol-1" class="essential persist">Anthony Pound</td>
                    <td headers="MediaTable-0-mediaTableCol-2" class="optional">Pending</td>
                    <td headers="MediaTable-0-mediaTableCol-3" class="optional">20/04/2012</td>
                    <td headers="MediaTable-0-mediaTableCol-4" class="essential">$610.42</td>
                    <td headers="MediaTable-0-mediaTableCol-5" class="essential">
                        <a href="#" title="Edit"><i class="splashy-document_letter_edit"></i></a>
                        <a href="#" title="Accept"><i class="splashy-document_letter_okay"></i></a>
                        <a href="#" title="Remove"><i class="splashy-document_letter_remove"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>        
    </section>
</div>

<div class='info row fix'>
    <section class='c6'>
        <h3 class='heading'> Últimos Chamados Recebidos </h3>
        <table class="table">
            <thead>
                <tr>
                    <th class="optional" id="MediaTable-0-mediaTableCol-0">id</th>
                    <th class="essential persist" id="MediaTable-0-mediaTableCol-1">Corretor</th>
                    <th class="optional" id="MediaTable-0-mediaTableCol-2">Status</th>
                    <th class="optional" id="MediaTable-0-mediaTableCol-3">Date Added</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td headers="MediaTable-0-mediaTableCol-0" class="optional">134</td>
                    <td headers="MediaTable-0-mediaTableCol-1" class="essential persist">Summer Throssell</td>
                    <td headers="MediaTable-0-mediaTableCol-2" class="optional">Pending</td>
                    <td headers="MediaTable-0-mediaTableCol-3" class="optional">24/04/2012</td>
                </tr>
            </tbody>
        </table>     
    </section>
    <section class='c6'>
        <h3 class='heading'> Últimos Chamados Enviados </h3>
        <table class="table">
            <thead>
                <tr>
                    <th class="optional" id="MediaTable-0-mediaTableCol-0">id</th>
                    <th class="essential persist" id="MediaTable-0-mediaTableCol-1">Corretor</th>
                    <th class="optional" id="MediaTable-0-mediaTableCol-2">Status</th>
                    <th class="optional" id="MediaTable-0-mediaTableCol-3">Date Added</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td headers="MediaTable-0-mediaTableCol-0" class="optional">134</td>
                    <td headers="MediaTable-0-mediaTableCol-1" class="essential persist">Summer Throssell</td>
                    <td headers="MediaTable-0-mediaTableCol-2" class="optional">Pending</td>
                    <td headers="MediaTable-0-mediaTableCol-3" class="optional">24/04/2012</td>
                </tr>
            </tbody>
        </table>        
    </section>
</div>