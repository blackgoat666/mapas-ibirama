<?php $metas = $entity->getRegisteredMetadata(); ?>
<div class="ficha-spcultura">
    <?php if($this->isEditable() && $entity->shortDescription && strlen($entity->shortDescription) > 400): ?>
        <div class="alert warning">
            <?php \MapasCulturais\i::_e("O limite de caracteres da descrição curta foi diminuido para 400, mas seu texto atual possui");?> 
            <?php echo strlen($entity->shortDescription) ?> 
            <?php \MapasCulturais\i::_e("caracteres. Você deve alterar seu texto ou este será cortado ao salvar.");?>
        </div>
    <?php endif; ?>
    <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"shortDescription") && $editEntity? 'required': '');?>" data-edit="shortDescription" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Descrição Curta");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Insira uma descrição curta");?>" data-showButtons="bottom" data-tpl='<textarea maxlength="400"></textarea>'><?php echo $this->isEditable() ? $entity->shortDescription : nl2br($entity->shortDescription); ?></span>

    <?php $this->applyTemplateHook('tab-about-service','before'); ?>

    <div class="servico">
        <?php $this->applyTemplateHook('tab-about-service','begin'); ?>
        <!-- Campo Site -->
        <?php if($this->isEditable() || $entity->site): ?>
            <p><span class="label"><?php \MapasCulturais\i::_e("Site");?>:</span>
            <?php if($this->isEditable()): ?>
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"site") && $editEntity? 'required': '');?>" data-edit="site" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Site");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Insira a url de seu site");?>">
                <?php echo $entity->site; ?>
            </span>
            </p>
            <?php else: ?>
                <a class="url" href="<?php echo $entity->site; ?>"><?php echo $entity->site; ?></a>
            <?php endif; ?>
        <?php endif; ?>

        <?php if($this->isEditable()): ?>
            <!-- Campo Nome Completo -->
            <?php if ( key_exists ('nomeCompleto', $metas) ): ?>
            <p class="privado">
                <span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("Nome Completo");?>:</span> 
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"nomeCompleto") && $editEntity? 'required': '');?>" data-edit="nomeCompleto" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Nome Completo");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Insira o nome completo");?>">
                    <?php echo $entity->nomeCompleto; ?>
                </span>
            </p>
            <?php endif; ?>
            <!-- Campo Razão Completo -->
            <?php if ( key_exists ('razaoSocial', $metas) ): ?>
            <p class="privado">
                <span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("Razão Social");?>:</span> 
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"razaoSocial") && $editEntity? 'required': '');?>" data-edit="razaoSocial" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Razão Social");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Insira a razão social");?>">
                    <?php echo $entity->razaoSocial; ?>
                </span>
            </p>
            <?php endif; ?>
            <!-- Campo Nome Social -->
            <?php if ( key_exists ('nomeSocial', $metas) ): ?>
            <p class="privado">
                <span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("Nome Social");?>:</span> 
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"nomeSocial") && $editEntity? 'required': '');?>" data-edit="nomeSocial" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Nome Social");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("O preenchimento do campo nome social é opcional");?>">
                    <?php echo $entity->nomeSocial; ?>
                </span>
            </p>
            <?php endif; ?>
            <!-- Campo Nome Profissional -->
            <?php if ( key_exists ('nomeProfissional', $metas) ): ?>
            <p class="privado">
                <span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("Nome Profissional");?>:</span> 
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"nomeProfissional") && $editEntity? 'required': '');?>" data-edit="nomeProfissional" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Nome Profissional");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("O preenchimento do campo nome profissional é opcional");?>">
                    <?php echo $entity->nomeProfissional; ?>
                </span>
            </p>
            <?php endif; ?>
            <!-- Campo Data de Nascimento -->
            <?php if ( key_exists ('dataDeNascimento', $metas) ): ?>
            <p class="privado">
                <span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("Data de Nascimento/Fundação");?>:</span>
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"dataDeNascimento") && $this->isEditable()? 'required': '');?>" data-type="date" data-edit="dataDeNascimento" data-viewformat="dd/mm/yyyy" data-showbuttons="false" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Data de Nascimento");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Insira a data de nascimento");?>">
                    <?php $dtN = (new DateTime)->createFromFormat('Y-m-d', $entity->dataDeNascimento); echo $dtN ? $dtN->format('d/m/Y') : ''; ?>
                </span>
            </p>
            <?php endif; ?>
            <!-- Campo Data de Fundação -->
            <?php if ( key_exists ('dataDeFundacao', $metas) ): ?>
            <p class="privado">
                <span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("Data de Fundação");?>:</span>
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"dataDeFundacao") && $this->isEditable()? 'required': '');?>" data-type="date" data-edit="dataDeFundacao" data-viewformat="dd/mm/yyyy" data-showbuttons="false" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Data de Fundação");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Insira a data de fundação");?>">
                    <?php $dtN = (new DateTime)->createFromFormat('Y-m-d', $entity->dataDeFundacao); echo $dtN ? $dtN->format('d/m/Y') : ''; ?>
                </span>
            </p>
            <?php endif; ?>
            <!-- Nacionalidade -->
            <?php if ( key_exists ('nacionalidade', $metas) ): ?>
            <p class="privado">
                <span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("Nacionalidade");?>:</span> 
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"nacionalidade") && $editEntity? 'required': '');?>" data-edit="nacionalidade" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Nacionalidade");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Informe sua nacionalidade");?>">
                    <?php echo $entity->nacionalidade; ?>
                </span>
            </p>
            <?php endif; ?>
            <!-- Naturalidade -->
            <?php if ( key_exists ('naturalidade', $metas) ): ?>
             <p class="privado">
                <span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("Naturalidade");?>:</span> 
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"naturalidade") && $editEntity? 'required': '');?>" data-edit="naturalidade" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Naturalidade");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Informe sua naturalidade");?>">
                    <?php echo $entity->naturalidade; ?>
                </span>
            </p>
            <?php endif; ?>
            <!-- Gênero -->
            <?php if ( key_exists ('genero', $metas) ): ?>
            <p class="privado">
                <span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("Gênero");?>:</span> 
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"genero") && $editEntity? 'required': '');?>" data-edit="genero" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Gênero");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Selecione o gênero se for pessoa física");?>">
                    <?php echo $entity->genero; ?>
                </span>
            </p>
            <?php endif; ?>
            <!-- Orientação Sexual -->
            <?php if ( key_exists ('orientacaoSexual', $metas) ): ?>
            <p class="privado"><span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("Orientação Sexual");?>:</span> 
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"orientacaoSexual") && $editEntity? 'required': '');?>" data-edit="orientacaoSexual" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Orientação Sexual");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Selecione a orientação sexual se for pessoa física");?>">
                    <?php echo $entity->orientacaoSexual; ?>
                </span>
            </p>
            <?php endif; ?>
            <!-- Raça/Cor -->
            <?php if ( key_exists ('raca', $metas) ): ?>
            <p class="privado"><span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("Raça/Cor");?>:</span> 
                <span class="js-editable  <?php echo ($entity->isPropertyRequired($entity,"raca") && $editEntity? 'required': '');?>" data-edit="raca" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Raça/cor");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Selecione a raça/cor se for pessoa física");?>">
                    <?php echo $entity->raca; ?>
                </span>
            </p>
            <?php endif; ?>
            <!-- Estado Civil -->
            <?php if ( key_exists ('estadoCivil', $metas) ): ?>
            <p class="privado">
                <span class="icon icon-private-info"></span><span class="label"><?php \MapasCulturais\i::_e("Estado Civil");?>:</span>
                <span
                    class="js-editable <?php echo ($entity->isPropertyRequired($entity,"estadoCivil") && $editEntity? 'required': '');?>"
                    data-edit="estadoCivil"
                    data-original-title="<?php \MapasCulturais\i::esc_attr_e("Estado Civil");?>"
                    data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Selecione seu estado civil se for pessoa física");?>"><?php echo $entity->estadoCivil; ?></span>
            </p>
            <?php endif; ?>
            <!-- Escolaridade -->
            <?php if ( key_exists ('escolaridade', $metas) ): ?>
            <p class="privado">
                <span class="icon icon-private-info"></span><span class="label"><?php \MapasCulturais\i::_e("Escolaridade");?>:</span>
                <span
                    class="js-editable <?php echo ($entity->isPropertyRequired($entity,"escolaridade") && $editEntity? 'required': '');?>"
                    data-edit="escolaridade"
                    data-original-title="<?php \MapasCulturais\i::esc_attr_e("Escolaridade");?>"
                    data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Selecione sua escolaridade");?>"><?php echo $entity->escolaridade; ?></span>
            </p>
            <?php endif; ?>
            <!-- Campo CPF/CNPJ -->
            <?php if ( key_exists ('documento', $metas) ): ?>
            <p class="privado">
                <span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("CPF/CNPJ");?>:</span> 
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"documento") && $editEntity? 'required': '');?>" data-edit="documento" data-original-title="<?php \MapasCulturais\i::esc_attr_e("CPF/CNPJ");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Insira o CPF ou CNPJ com pontos, hífens e barras");?>">
                    <?php echo $entity->documento; ?>
                </span>
            </p>
            <?php endif; ?>
            <!-- Campo CNPJ -->
            <?php if ( key_exists ('cnpj', $metas) ): ?>
            <p class="privado">
                <span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("CNPJ");?>:</span> 
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"cnpj") && $editEntity? 'required': '');?>" data-edit="cnpj" data-original-title="<?php \MapasCulturais\i::esc_attr_e("CNPJ");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Insira o CNPJ com pontos, hífens e barras");?>">
                    <?php echo $entity->cnpj; ?>
                </span>
            </p>
            <?php endif; ?>
            <!-- Identidade (RG) -->
            <?php if ( key_exists ('identidade', $metas) ): ?>
            <p class="privado">
                <span class="icon icon-private-info"></span><span class="label"><?php \MapasCulturais\i::_e("Identidade (RG)");?>:</span>
                <span
                    class="js-editable <?php echo ($entity->isPropertyRequired($entity,"identidade") && $editEntity? 'required': '');?>"
                    data-edit="identidade"
                    data-original-title="<?php \MapasCulturais\i::esc_attr_e("Número da Identidade (RG)");?>"
                    data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Insira o número de sua identidade (RG) se for pessoa física");?>"><?php echo $entity->identidade; ?></span>
            </p>
            <?php endif; ?>
            <!-- Data de Expedição (RG) -->
            <?php if ( key_exists ('expedicaoIdentidade', $metas) ): ?>
            <p class="privado"><span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("Data de Expedição (RG)");?>:</span>
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"expedicaoIdentidade") && $this->isEditable()? 'required': '');?>"
                    data-type="date" data-edit="expedicaoIdentidade" data-viewformat="dd/mm/yyyy" data-showbuttons="false"
                    data-original-title="<?php \MapasCulturais\i::esc_attr_e("Data de Expedição (RG)");?>"
                    data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Insira a data de expedição da identidade (RG)");?>">
                    <?php $dtN = (new DateTime)->createFromFormat('Y-m-d', $entity->expedicaoIdentidade); echo $dtN ? $dtN->format('d/m/Y') : ''; ?>
                </span>
            </p>
            <?php endif; ?>
            <!-- Órgão Expedidor (RG) -->
            <?php if ( key_exists ('expedidorIdentidade', $metas) ): ?>
            <p class="privado"><span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("Órgão Expedidor (RG)");?>:</span>
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"expedidorIdentidade") && $editEntity? 'required': '');?>"
                    data-edit="expedidorIdentidade" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Órgão Expedidor (Identidade)");?>"
                    data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Informe o expedidor/unidade federativa, exemplo: SSP/CE , SSP/DF");?>">
                    <?php echo $entity->expedidorIdentidade; ?>
                </span>
            </p>
            <?php endif; ?>
            <!-- Email Principal -->
            <?php if ( key_exists ('emailPrivado', $metas) ): ?>
            <p class="privado"><span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("Email Principal");?>:</span> 
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"emailPrivado") && $editEntity? 'required': '');?>" data-edit="emailPrivado" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Email Principal");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Insira um email que não será exibido publicamente");?>">
                    <?php echo $entity->emailPrivado; ?>
                </span>
            </p>
            <?php endif; ?>
        <?php endif; ?>
        
        <?php if($this->isEditable() || $entity->emailPublico): ?>
            <!-- Email Público -->
            <?php if ( key_exists ('emailPublico', $metas) ): ?>
            <p><span class="label"><?php \MapasCulturais\i::_e("E-mail");?>:</span> 
                <span class="js-editable <?php echo ($entity->isPropertyRequired($entity,"emailPublico") && $this->isEditable()? 'required': '');?>" data-edit="emailPublico" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Email Público");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Insira um email que será exibido publicamente");?>">
                    <?php echo $entity->emailPublico; ?>
                </span>
            </p>
            <?php endif; ?>
        <?php endif; ?>

        <?php if($this->isEditable()): ?>
            <!-- Telefone Principal -->
            <?php if ( key_exists ('telefone1', $metas) ): ?>
            <p class="privado">
                <span class="icon icon-private-info"></span>
                <span class="label"><?php \MapasCulturais\i::_e("Telefone Principal");?>:</span> 
                <span class="js-editable js-mask-phone <?php echo ($entity->isPropertyRequired($entity,"telefone1") && $this->isEditable()? 'required': '');?>" data-edit="telefone1" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Telefone Principal");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Insira um telefone que não será exibido publicamente");?>">
                    <?php echo $entity->telefone1; ?>
                </span>
            </p>
            <?php endif; ?>
            
        <?php endif; ?>

        <?php if($this->isEditable() || $entity->telefonePublico): ?>
            <!-- Telefone Público -->
            <?php if ( key_exists ('telefonePublico', $metas) ): ?>
            <p>
                <span class="label"><?php \MapasCulturais\i::_e("Telefone Público");?>:</span> 
                <span class="js-editable js-mask-phone <?php echo ($entity->isPropertyRequired($entity,"telefonePublico") && $this->isEditable()? 'required': '');?>" data-edit="telefonePublico" data-original-title="<?php \MapasCulturais\i::esc_attr_e("Telefone Público");?>" data-emptytext="<?php \MapasCulturais\i::esc_attr_e("Insira um telefone que será exibido publicamente");?>">
                    <?php echo $entity->telefonePublico; ?>
                </span>
            </p>
            <?php endif; ?>
        <?php endif; ?>

        <?php $this->applyTemplateHook('tab-about-service','end'); ?>
    </div>

    <?php $this->applyTemplateHook('tab-about-service','after'); ?>
</div>