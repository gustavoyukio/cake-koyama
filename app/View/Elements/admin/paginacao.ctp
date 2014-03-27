<div class='paginacao'>
    <p>
        <?php
            echo $this->Paginator->counter(array(
                'format' => __('Página {:page} de {:pages}, mostrando {:current} imóveis de {:count} no total, Começando a listagem em {:start}, terminando em {:end}')
                )
            );
        ?>  
    </p>
    <div class="paging">
        <?php
            echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>