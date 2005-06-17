<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.2                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// CVS version: $Id: brazilian_portuguese-utf-8.php,v 1.7 2004/07/24 15:04:00 gaugau Exp $
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Portuguese [Brazilian]',
  'lang_name_native' => 'PortuguÃªs',
  'lang_country_code' => 'br',
  'trans_name'=> 'Marcos S. Filho',
  'trans_email' => 'throttleben@hotmail.com',
  'trans_website' => '',
  'trans_date' => '2004/05/01',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab');
$lang_month = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');

// Some common strings
$lang_yes = 'Sim';
$lang_no  = 'NÃ£o';
$lang_back = 'VOLTAR';
$lang_continue = 'CONTINUAR';
$lang_info = 'InformaÃ§Ã£o';
$lang_error = 'Erro';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d de %B, %Y';
$lastcom_date_fmt =  '%d/%m/%y as %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%d de %B, %Y';
$register_date_fmt = '%d de %B, %Y';
$lasthit_date_fmt = '%d de %B, %Y as %I:%M %p'; //cpg1.3.0
$comment_date_fmt =  '%d de %B, %Y as %I:%M %p'; //cpg1.3.0

// For the word censor
$lang_bad_words = array('foda*', 'cu', 'otario', 'bicha', 'caralho', 'kct*', 'rola', 'porra', 'merda', 'idiota', 'otario', 'tabacudo', 'rola', 'buceta','tabacuda', 'fuck', 'lesbica', 'gay', 'bixa', 'frango', 'burro');

$lang_meta_album_names = array(
	'random' => 'Fotos Diversas',
	'lastup' => 'Ãšltimas Fotos Adicionadas',
	'lastalb'=> 'Ãšltimos Albums Atualizados',
	'lastcom' => 'Ãšltimos ComentÃ¡rios',
	'topn' => 'Fotos Mais Visitadas',
	'toprated' => 'Fotos com mais Popularidade',
	'lasthits' => 'Ultimas Fotos Visitadas',
	'search' => 'Resultado da Pesquisa',
	'favpics'=> 'Fotos Favoritos', //cpg1.3.0
);

$lang_errors = array(
	'access_denied' => 'VocÃª nÃ£o tem permissÃ£o para visualizar esta pÃ¡gina.',
	'perm_denied' => 'VocÃª nÃ£o tem permissÃ£o para executar esta operaÃ§Ã£o.',
	'param_missing' => 'Script executado sem os paramentos requeridos.',
	'non_exist_ap' => 'O album ou foto que vocÃª selecionou nÃ£o foi encontrado!',
	'quota_exceeded' => 'A quota de espaÃ§o para armazenamento excedeu o limite<br /><br />VocÃª possui [quota]KB de espaÃ§o, suas fotos atualmente utilizam [space]KB, adicionar este arquivo irÃ¡ estourar sua cota permitida.',
	'gd_file_type_err' => 'Rstamos usando um sistema que sÃ³ permite fotos JPEG e PNG.',
	'invalid_image' => 'A foto que vocÃª enviou estÃ¡ corrompida ou nÃ£o pode ser 
interpretada pela biblioteca GD',
	'resize_failed' => 'NÃ£o foi possÃ­vel criar a miniatura ou redimensionar a foto.',
	'no_img_to_display' => 'Sem fotos para exibir',
	'non_exist_cat' => 'A categoria selecionada nÃ£o existe',
	'orphan_cat' => 'A categoria tem um paramento que nÃ£o existe, vÃ¡ para o gerenciador de categorias e corrija o problema.',
	'directory_ro' => 'O DiretÃ³rio \'%s\' nÃ£o Ã© gravÃ¡vel, as fotos nÃ£o podem ser deletadas',
	'non_exist_comment' => 'O comentÃ¡rio selecionado nÃ£o existe.',
	'pic_in_invalid_album' => 'Foto em um album inexistente (%s)!?',
	'banned' => 'VoÃ§Ãª esta banido deste site.',
	'not_with_udb' => 'Esta funÃ§Ã£o esta desativada na Galeria porque esta integrada com um programa de forum. O que vocÃª estÃ¡ tentando fazer nao Ã© suportado nesta configuraÃ§Ã£o, ou a funÃ§Ã£o deve ser chamada pelo programa de forum.',
	'offline_title' => 'Offline.', //cpg1.3.0
	'offline_text' => 'Estamos offline - tente novamente mais tarde', 
//cpg1.3.0
	'ecards_empty' => 'NÃ£o hÃ¡ nenhum registro de ecards para visualizar. Verifique se vocÃª ativou a opÃ§Ã£o de Logar os Ecards na configuraÃ§Ã£o!', //cpg1.3.0
	'action_failed' => 'Falha. NÃ£o foi possivel processar seu pedido.', //cpg1.3.0
	'no_zip' => 'As bibliotecas necessÃ¡rias para processar os arquivos em ZIP nÃ£o estÃ£o disponiveis. Por favor contacte o Administrador do site.', //cpg1.3.0
	'zip_type' => 'VocÃª nÃ£o tem permissÃ£o para enviar arquivos ZIP.', //cpg1.3.0
);


$lang_bbcode_help = 'Seguir estes codigos pode ser Ãºtil: 
<li>[b]<b>Negrito</b>[/b]</li> <li>[i]<i>ItÃ¡lico</i>[/i]</li> 
<li>[url=http://www.seusite.com.br/]Url Text[/url]</li> 
<li>[email]nome@provedor.com.br[/email]</li>'; //cpg1.3.0

// ------------------------------------------------------------------------- 
//
// File theme.php
// ------------------------------------------------------------------------- 
//

$lang_main_menu = array(
	'alb_list_title' => 'Ir para a lista de albums',
	'alb_list_lnk' => 'Albums',
	'my_gal_title' => 'Ir para Minha Galeria Pessoal',
	'my_gal_lnk' => 'Minha Galeria',
	'my_prof_lnk' => 'Meus Dados',
	'adm_mode_title' => 'Alterar para modo Admin',
	'adm_mode_lnk' => 'Modo Admin',
	'usr_mode_title' => 'Alterar para modo UsuÃ¡rio',
	'usr_mode_lnk' => 'Modo UsuÃ¡rio',
	'upload_pic_title' => 'Enviar foto para o album',
	'upload_pic_lnk' => 'Enviar foto',
	'register_title' => 'Criar uma conta',
	'register_lnk' => 'Clique aqui para se Registrar',
	'login_lnk' => 'Login',
	'logout_lnk' => 'Logout',
	'lastup_lnk' => 'Ãšltimos envios',
	'lastcom_lnk' => 'Ãšltimos comentÃ¡rios',
	'topn_lnk' => 'Mais Visualizadas',
	'toprated_lnk' => 'Fotos mais Populares',
	'search_lnk' => 'Pesquisar',
	'fav_lnk' => 'Meus Favoritos',
	'memberlist_title' => 'Lista de Membros', //cpg1.3.0
	'memberlist_lnk' => 'Membros', //cpg1.3.0
	'faq_title' => 'QuestÃµes mais Frequentes sobre a Galeria', //cpg1.3.0
	'faq_lnk' => 'FAQ', //cpg1.3.0

);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Aprovar Fotos Enviadas',
	'config_lnk' => 'ConfiguraÃ§Ãµes',
	'albums_lnk' => 'Albums',
	'categories_lnk' => 'Categorias',
	'users_lnk' => 'UsuÃ¡rios',
	'groups_lnk' => 'Grupos',
	'comments_lnk' => 'Revisar ComentÃ¡rios',
	'searchnew_lnk' => 'Adicionar Fotos em Album',
	'util_lnk' => 'Ferramentas Administrativas', //cpg1.3.0
	'ban_lnk' => 'UsuÃ¡rios Banidos',
	'db_ecard_lnk' => 'Visualizar Ecards', //cpg1.3.0
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Criar/ordenar meus albums',
	'modifyalb_lnk' => 'Modificar meus albums',
	'my_prof_lnk' => 'Meus Dados',
);

$lang_cat_list = array(
	'category' => 'Categoria',
	'albums' => 'Albums',
	'pictures' => 'Fotos',
);

$lang_album_list = array(
	'album_on_page' => '%d album(s) na(s) %d pÃ¡gina(s)'
);

$lang_thumb_view = array(
	'date' => 'DATA',
	//Ordenar por arquivo e titulo
	'name' => 'ARQUIVO',
	'title' => 'TÃTULO',
	'sort_da' => 'Ordenar por data crescente',
	'sort_dd' => 'Ordenar por data decrescente',
	'sort_na' => 'Ordenar por nome ascendente',
	'sort_nd' => 'Ordenar por nome descendente',
	'sort_ta' => 'Ordenar por titulo ascendente',
	'sort_td' => 'Ordenar por titulo descendente',
	'download_zip' => 'Baixar arquivo ZIP com seu favoritos', //cpg1.3.0
	'pic_on_page' => '%d foto(s) na(s) %d pagina(s)',
	'user_on_page' => '%d usuÃ¡rio(s) na(s) %d pÃ¡gina(s)'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'Retornar para a pÃ¡gina de miniaturas',
	'pic_info_title' => 'Mostrar/Esconder informaÃ§Ãµes da do arquivo',
	'slideshow_title' => 'SlideShow',
	'ecard_title' => 'enviar esta foto como e-card',
	'ecard_disabled' => 'os e-cards estÃ£o desabilitados',
	'ecard_disabled_msg' => 'VocÃª nÃ£o possui permissÃ£o para enviar e-cards',
	'prev_title' => 'Ver foto anterior',
	'next_title' => 'Ver prÃ³xima foto',
	'pic_pos' => 'FOTO %s - TOTAL %s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'DÃª sua nota para esta foto ',
	'no_votes' => '(Nenhum voto atÃ© o momento)',
	'rating' => '(MÃ©dia de votos : %s / 5 dos %s votos)',
	'rubbish' => 'PÃ©ssima',
	'poor' => 'Ruim',
	'fair' => 'Satisfatoria',
	'good' => 'Boa',
	'excellent' => 'Excelente',
	'great' => 'Maravilhosa',
);

// ------------------------------------------------------------------------- 
//
// File include/exif.inc.php
// ------------------------------------------------------------------------- 
//

// void

// ------------------------------------------------------------------------- 
//
// File include/functions.inc.php
// ------------------------------------------------------------------------- 
//

$lang_cpg_die = array(
	INFORMATION => $lang_info,
	ERROR => $lang_error,
	CRITICAL_ERROR => 'ERRO CRÃTICO',
	'file' => 'Arquivo: ',
	'line' => 'Linha: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Arquivo : ',
	'filesize' => 'Tamanho : ',
	'dimensions' => 'DimensÃµes : ',
	'date_added' => 'Data de Envio : '
);

$lang_get_pic_data = array(
	'n_comments' => '%s comentÃ¡rios',
	'n_views' => '%s visualizaÃ§Ãµes',
	'n_votes' => '(%s votos)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'InformaÃ§Ãµes de Debug', //cpg1.3.0
  'select_all' => 'Selecionar Tudo', //cpg1.3.0
  'copy_and_paste_instructions' => 'Se vocÃª for pedir ajuda ao suporte do 
coppermine, copie e cole isto no seu pedido de ajuda. Certifique-se de ter 
removido todas as senhas que aparecerem antes de enviar.', //cpg1.3.0
  'phpinfo' => 'mostrar phpinfo', //cpg1.3.0
);

$lang_language_selection = array(
  'reset_language' => 'Idioma PadrÃ£o', //cpg1.3.0
  'choose_language' => 'Escolha seu idioma', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'Tema padrÃ£o', //cpg1.3.0
  'choose_theme' => 'Escolha um tema', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File include/init.inc.php
// ------------------------------------------------------------------------- 
//

// void

// ------------------------------------------------------------------------- 
//
// File include/picmgmt.inc.php
// ------------------------------------------------------------------------- 
//

// void

// ------------------------------------------------------------------------- 
//
// File include/smilies.inc.php
// ------------------------------------------------------------------------- 
//

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
	'Exclamation' => 'ExclamaÃ§Ã£o',
	'Question' => 'QuestÃ£o',
	'Very Happy' => 'Muito Feliz',
	'Smile' => 'Sorriso',
	'Sad' => 'Triste',
	'Surprised' => 'Surpreso',
	'Shocked' => 'Chocado',
	'Confused' => 'Confuso',
	'Cool' => 'Legal',
	'Laughing' => 'Risonho',
	'Mad' => 'Louco',
	'Razz' => 'Razz',
	'Embarassed' => 'EmbaraÃ§ado',
	'Crying or Very sad' => 'Muito triste/Muito Doente',
	'Evil or Very Mad' => 'Muito mÃ¡u',
	'Twisted Evil' => 'Demonio louco',
	'Rolling Eyes' => 'Rolando os olhos',
	'Wink' => 'Piscando',
	'Idea' => 'Ideia',
	'Arrow' => 'Seta',
	'Neutral' => 'Neutro',
	'Mr. Green' => 'Mr. Green',
);

// ------------------------------------------------------------------------- 
//
// File addpic.php
// ------------------------------------------------------------------------- 
//

// void

// ------------------------------------------------------------------------- 
//
// File admin.php
// ------------------------------------------------------------------------- 
//

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => 'Saindo da AdministraÃ§Ã£o...',
	1 => 'Entrando na AdministraÃ§Ã£o...',
);

// ------------------------------------------------------------------------- 
//
// File albmgr.php
// ------------------------------------------------------------------------- 
//

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Albums precisam ter um nome !',
	'confirm_modifs' => 'Tem certeza que deseja realizar as modificaÃ§Ãµes ?',
	'no_change' => 'VocÃª nÃ£o fez nenhuma mudanÃ§a!',
	'new_album' => 'Novo album',
	'confirm_delete1' => 'Tem certeza que deseja remover este album ?',
	'confirm_delete2' => '\nTodas as fotos e comentÃ¡rios serÃ£o perdidos !',
	'select_first' => 'Primeiro selecione um album',
	'alb_mrg' => 'Gerenciador de albums',
	'my_gallery' => '* Minha Galeria *',
	'no_category' => '* Sem categoria *',
	'delete' => 'Apagar',
	'new' => 'Novo',
	'apply_modifs' => 'Aplicar modificaÃ§Ãµes',
	'select_category' => 'Selecione uma categoria',
);

// ------------------------------------------------------------------------- 
//
// File catmgr.php
// ------------------------------------------------------------------------- 
//

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => 'Parametros requeridos para operaÃ§Ã£o \'%s\' nÃ£o fornecidos 
!',
	'unknown_cat' => 'A categoria selecionada nÃ£o existe em nosso banco de 
dados',
	'usergal_cat_ro' => 'A categoria do usuÃ¡rio nÃ£o pode ser excluÃ­da !',
	'manage_cat' => 'Gerenciar categorias',
	'confirm_delete' => 'VocÃª tem certeza que deseja EXCLUIR esta categoria ? 
',
	'category' => 'Categoria',
	'operations' => 'OperaÃ§Ãµes',
	'move_into' => 'Mover para',
	'update_create' => 'Atualizar/Criar categoria',
	'parent_cat' => 'Sub-categoria',
	'cat_title' => 'TÃ­tulo da categoria',
	'cat_thumb' => 'Miniatura da categoria', //cpg1.3.0
	'cat_desc' => 'DescriÃ§Ã£o da categoria',
);

// ------------------------------------------------------------------------- 
//
// File config.php
// ------------------------------------------------------------------------- 
//

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'ConfiguraÃ§Ã£o',
	'restore_cfg' => 'Restaurar configuraÃ§Ã£o padrÃ£o',
	'save_cfg' => 'Salvar nova configuraÃ§Ã£o',
	'notes' => 'Notas',
	'info' => 'InformaÃ§Ã£o',
	'upd_success' => 'ConfiguraÃ§Ãµes atualizadas!',
	'restore_success' => 'ConfiguraÃ§Ã£o padrÃ£o restaurada',
	'name_a' => 'Nome ascendente',
	'name_d' => 'Nome descendente',
	'title_a' => 'TÃ­tulo ascendente',
	'title_d' => 'TÃ­tulo descendente',
	'date_a' => 'Data Crescente',
	'date_d' => 'Data Decrescente',
	'th_any' => 'Aspecto MÃ¡ximo',
	'th_ht' => 'Altura',
	'th_wd' => 'Largura',
	'label' => 'etiqueta', //cpg1.3.0
	'item' => 'item', //cpg1.3.0
	'debug_everyone' => 'Todos', //cpg1.3.0
	'debug_admin' => 'Apenas o admin', //cpg1.3.0
        );


if (defined('CONFIG_PHP')) $lang_config_data = array(
	'ConfiguraÃ§Ãµes Gerais',
	array('Nome da Galeria', 'gallery_name', 0),
	array('DescriÃ§Ã£o da Galeria', 'gallery_description', 0),
	array('Email do Administrador', 'gallery_admin_email', 0),
	array('URL da Galeria(para aparecer no ecard e no link direto para 
imagem)', 'ecards_more_pic_target', 0),
	array('Galeria Offline', 'offline', 1), //cpg1.3.0
	array('Logar ecards', 'log_ecards', 1), //cpg1.3.0
	array('Permitir download de ZIP dos favoritos', 'enable_zipdownload', 1), 
//cpg1.3.0

	'Idioma, Temas &amp; ConfiguraÃ§Ãµes de Caractere',
	array('Idioma', 'lang', 5),
	array('Tema', 'theme', 6),
	array('Mostrar lista de idiomas', 'language_list', 1), //cpg1.3.0
	array('Mostrar bandeiras em vez dos nomes', 'language_flags', 8), 
//cpg1.3.0
	array('Mostrar &quot;resetar&quot; na seleÃ§Ã£o de idioma', 'language_reset', 
1), //cpg1.3.0
	array('Mostrar a lista de temas', 'theme_list', 1), //cpg1.3.0
	array('Mostrar &quot;resetar&quot; na seleÃ§Ã£o de tema', 'theme_reset', 1), 
//cpg1.3.0
	array('Mostrar FAQ', 'display_faq', 1), //cpg1.3.0
	array('Mostrar ajuda para o bbcode', 'show_bbcode_help', 1), //cpg1.3.0
	array('CodificaÃ§Ã£o de Caractere', 'charset', 4), //cpg1.3.0


	'VisualizaÃ§Ã£o da Lista de Albums',
	array('Largura da tabela principal (em pixels ou %)', 'main_table_width', 
0),
	array('Numero de Niveis de categorias para visualizar', 'subcat_level', 0),
	array('Numero de albums para visualizar', 'albums_per_page', 0),
	array('Numero de colunas para a lista de albums', 'album_list_cols', 0),
	array('Tamanho das miniaturas em pixels', 'alb_list_thumb_size', 0),
	array('Conteudo da pÃ¡gina principal', 'main_page_layout', 0),
	array('Mostrar o primeiro nÃ­vel das miniaturas do album nas 
categorias','first_level',1),

	'VisualizaÃ§Ã£o das miniaturas',
	array('Numero de colunas na pÃ¡gina das miniaturas', 'thumbcols', 0),
	array('Numero de linhas na pÃ¡gina das miniaturas', 'thumbrows', 0),
	array('Numero mÃ¡ximo de tabelas', 'max_tabs', 0),
	array('Subtitulo da foto (juntamente com o titulo) abaixo da miniatura', 
'caption_in_thumbview', 1),
	array('Mostrar o numero de visualizaÃ§Ã£o abaixo da miniatura', 
'views_in_thumbview', 1), //cpg1.3.0
	array('Total de comentÃ¡rios abaixo da miniatura', 'display_comment_count', 
1),
	array('Mostrar o nome de quem enviou embaixo da miniatura', 
'display_uploader', 1), //cpg1.3.0
	array('Modo de organizaÃ§Ã£o das fotos', 'default_sort_order', 3),
	array('Numero minimo de votos para uma foto', 'min_votes_for_rating', 0),

	'VisualizaÃ§Ã£o das Fotos &amp; ConfiguraÃ§Ãµes dos ComentÃ¡rios',
	array('Largura da Tabela para visualizaÃ§Ã£o das fotos (em pixels ou %)', 
'picture_table_width', 0),
	array('Mostrar informaÃ§Ãµes da foto por padrÃ£o', 'display_pic_info', 1),
	array('Censurar palavrÃµes nos comentÃ¡rios', 'filter_bad_words', 1),
	array('Ativar carinhas', 'enable_smilies', 1),
	array('Permitir comentÃ¡rios consecutivos vindo do mesmo usuÃ¡rio (desativar 
proteÃ§Ã£o de flood)', 'disable_comment_flood_protect', 1), //cpg1.3.0
	array('Tamanho mÃ¡ximo para a descriÃ§Ã£o de uma foto', 'max_img_desc_length', 
0),
	array('Numero mÃ¡ximo de caracteres em uma palavra', 'max_com_wlength', 0),
	array('Numero mÃ¡ximo de linhas em um comentÃ¡rio', 'max_com_lines', 0),
	array('Tamanho mÃ¡ximo de um comentÃ¡rio', 'max_com_size', 0),
	array('Mostrar tira de filme abaixo da foto', 'display_film_strip', 1),
	array('Numero de itens na tira de filme', 'max_film_strip_items', 0),
	array('Notificar o admin sobre comentÃ¡rios por email', 
'email_comment_notification', 1), //cpg1.3.0
	array('Intervalo em milisegundos para o Slideshow (1 segundo = 1000 
milisegundos)', 'slideshow_interval', 0), //cpg1.3.0

	'ConfiguraÃ§Ãµes de Fotos e Miniaturas',
	array('Qualidade das fotos em JPEG', 'jpeg_qual', 0),
	array('Tamanho mÃ¡ximo da dimensÃ£o das miniaturas <a href="#notice2" 
class="clickable_option">**</a>', 'thumb_width', 0),
	array('Usar dimensÃ£o ( largura ou altura ou Aspecto MÃ¡ximo para miniaturas 
)<b>**</b>', 'thumb_use', 7),
	array('Fotos intermediarias','make_intermediate',1),
	array('Largura ou altura mÃ¡xima de uma foto intermediaria <a 
href="#notice2" class="clickable_option">**</a>', 'picture_width', 0),
	array('Tamanho mÃ¡ximo de uma foto enviada por upload (KB)', 'max_upl_size', 
0),
	array('Largura ou altura mÃ¡xima de uma foto enviada por upload (em 
pixels)', 'max_upl_width_height', 0),

	'ConfiguraÃ§Ãµes avanÃ§adas das fotos e das miniaturas',
	array('Mostrar Ãcone de album privado para um usuÃ¡rio nÃ£o 
logado','show_private',1), //cpg1.3.0
	array('Caracteres proibidos nos arquivos', 'forbiden_fname_char',0),
	//array('ExtensÃµes permitidas para as fotos enviadas por upload', 'allowed_file_extensions',0),
	array('Tipos de imagens permitidas', 'allowed_img_types',0), //cpg1.3.0
	array('Tipos de videos permitidos', 'allowed_mov_types',0), //cpg1.3.0
	array('Tipos de audios permitidos', 'allowed_snd_types',0), //cpg1.3.0
	array('Tipos de documentos permitidos', 'allowed_doc_types',0), //cpg1.3.0
	array('MÃ©todo para redimensionar as fotos','thumb_method',2),
	array('DiretÃ³rio do utilitÃ¡rio para \'converter\' fotos ImageMagick (exemplo /usr/bin/X11/)', 'impath', 0),
	//array('Tipos de fotos permitidas (valido apenas para ImageMagick)', 'allowed_img_types',0),
	array('Linha de comando para o ImageMagick', 'im_options', 0),
	array('Extrair a informaÃ§Ã£o EXIF dos arquivos JPEG?', 'read_exif_data', 1),
	array('Extrair a informaÃ§Ã£o IPTC dos arquivos JPEG?', 'read_iptc_data', 1), //cpg1.3.0
	array('DiretÃ³rio do album <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0),
	array('DiretÃ³rio para as fotos dos usuÃ¡rios <b>*</b>', 'userpics', 0),
	array('Prefixo para as fotos intermediarias <b>*</b>', 'normal_pfx', 0),
	array('Prefixo para as miniaturas <b>*</b>', 'thumb_pfx', 0),
	array('PermissÃ£o padrÃ£o para os diretÃ³rios', 'default_dir_mode', 0),
	array('PermissÃ£o padrÃ£o para as fotos', 'default_file_mode', 0),

	'ConfiguraÃ§Ãµes de usuÃ¡rios',
	array('Permitir o registro de novos usuÃ¡rios?', 'allow_user_registration', 
1),
	array('O Registro de um usuÃ¡rio requer a verificaÃ§Ã£o por email?', 
'reg_requires_valid_email', 1),
	array('Notificar o administrador sobre os novos registros por email', 
'reg_notify_admin_email', 1), //cpg1.3.0
	array('Permitir que dois usuÃ¡rios tenham o mesmo email?', 
'allow_duplicate_emails_addr', 1),
	array('UsuÃ¡rios podem ter albums privados?', 'allow_private_albums', 1),
	array('Notificar por email o administrador sobre novos uploads para 
aprovaÃ§Ã£o', 'upl_notify_admin_email', 1), //cpg1.3.0
	array('Permitir que usuÃ¡rios logados visualizem a lista de membros', 
'allow_memberlist', 1), //cpg1.3.0

	'Campos personalizaveis para descriÃ§Ã£o das fotos(deixe em branco se nÃ£o for 
usar)',
	array('Nome do Campo 1', 'user_field1_name', 0),
	array('Nome do Campo 2', 'user_field2_name', 0),
	array('Nome do Campo 3', 'user_field3_name', 0),
	array('Nome do Campo 4', 'user_field4_name', 0),

	'ConfiguraÃ§Ãµes de Cookies',
	array('Nome do cookie usado pelo script', 'cookie_name', 0),
	array('DiretÃ³rio do cookie usado pelo script', 'cookie_path', 0),

	'Ajustes variados',
	array('Ativar modo debug?', 'debug_mode', 1),
	array('Mostrar notices no modo debug', 'debug_notice', 1), //cpg1.3.0

  '<br /><div align="left"><a name="notice1"></a>(*) Estas configuraÃ§Ãµes 
marcadas. nÃ£o devem ser modificados se vocÃª ja tiver adicionado alguma foto 
na galeria.<br />
  <a name="notice2"></a>(**) Quando modificar esta configuraÃ§Ã£o, apenas os 
arquivos adicionados a partir deste ponto terÃ£o efeito, entÃ£o esta avisado 
que esta configuraÃ§Ã£o nÃ£o deve ser alterada se vocÃª ja tiver adicionado 
algum arquivo na galeria. Entretando, vocÃª pode aplicar modificaÃ§Ãµes nos 
arquivos existentes usando as &quot;<a href="util.php">Ferramentas 
Administrativas</a> (redimensionar fotos)&quot; do menu 
administrativo.</div><br />', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- 
//

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Ecards enviados', //cpg1.3.0
  'ecard_sender' => 'Remetente', //cpg1.3.0
  'ecard_recipient' => 'DestinatÃ¡rio', //cpg1.3.0
  'ecard_date' => 'Data', //cpg1.3.0
  'ecard_display' => 'Ver ecard', //cpg1.3.0
  'ecard_name' => 'Nome', //cpg1.3.0
  'ecard_email' => 'Email', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'ascendente', //cpg1.3.0
  'ecard_descending' => 'descendente', //cpg1.3.0
  'ecard_sorted' => 'Classificado', //cpg1.3.0
  'ecard_by_date' => 'por data', //cpg1.3.0
  'ecard_by_sender_name' => 'pelo nome do remetente', //cpg1.3.0
  'ecard_by_sender_email' => 'pelo email do remetente', //cpg1.3.0
  'ecard_by_sender_ip' => 'pelo ip do remetente', //cpg1.3.0
  'ecard_by_recipient_name' => 'pelo nome do destinatÃ¡rio', //cpg1.3.0
  'ecard_by_recipient_email' => 'pelo email do destinatÃ¡rio', //cpg1.3.0
  'ecard_number' => 'visualizando registro %s para %s de %s', //cpg1.3.0
  'ecard_goto_page' => 'ir para pÃ¡gina', //cpg1.3.0
  'ecard_records_per_page' => 'Registros por pÃ¡gina', //cpg1.3.0
  'check_all' => 'Marcar Todos', //cpg1.3.0
  'uncheck_all' => 'Desmarcar Todos', //cpg1.3.0
  'ecards_delete_selected' => 'Deletar os ecards selecionados', //cpg1.3.0
  'ecards_delete_confirm' => 'VocÃª tem certeza que deseja deletar os ecard 
selecionados? Marque a caixa de verificaÃ§Ã£o!', //cpg1.3.0
  'ecards_delete_sure' => 'Eu tenho certeza', //cpg1.3.0
);


// ------------------------------------------------------------------------- 
//
// File db_input.php
// ------------------------------------------------------------------------- 
//

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'VocÃª deve preencher um nome e o comentÃ¡rio',
	'com_added' => 'seu comentÃ¡rio foi adicionado',
	'alb_need_title' => 'VocÃª deve definir um nome para o album !',
	'no_udp_needed' => 'AtualizaÃ§Ã£o nÃ£o necessÃ¡ria.',
	'alb_updated' => 'O album foi atualizado',
	'unknown_album' => 'O album selecionado nÃ£o existe ou vocÃª nÃ£o tem 
permissÃ£o para enviar fotos para ele',
	'no_pic_uploaded' => 'Nenhuma foto enviada !<br /><br />Se vocÃª realmente 
selecionaou uma foto para enviar, verifique se o servidor permite 
envios...',
	'err_mkdir' => 'Falha ao criar diretÃ³rio %s !',
	'dest_dir_ro' => 'DiretÃ³rio de destino %s nÃ£o pode ser gravado pelo script 
!',
	'err_move' => 'ImpossÃ­vel mover %s para %s !',
	'err_fsize_too_large' => 'A foto que vocÃª estÃ¡ tentando enviar Ã© muito 
grande (mÃ¡ximo permitido %s x %s) !',
	'err_imgsize_too_large' => 'O tamanho da foto Ã© maior que o permitido 
(mÃ¡ximo permitido %s KB) !',
	'err_invalid_img' => 'O arquivo que vocÃª estÃ¡ tentando enviar nÃ£o Ã© um 
arquivo de foto vÃ¡lido !',
	'allowed_img_types' => 'VocÃª sÃ³ pode enviar %s fotos.',
	'err_insert_pic' => 'A foto \'%s\' nÃ£o pode ser inserida no album ',
	'upload_success' => 'Sua foto foi enviada com sucesso<br /><br />PorÃ©m sÃ³ 
serÃ¡ visÃ­vel apÃ³s a aprovaÃ§Ã£o do Administrador.',
	'notify_admin_email_subject' => '%s - NotificaÃ§Ã£o de Envio', //cpg1.3.0
	'notify_admin_email_body' => 'Uma foto foi enviada por %s e precisa de sua 
aprovaÃ§Ã£o. Acesse %s', //cpg1.3.0
	'info' => 'InformaÃ§Ã£o',
	'com_added' => 'ComentÃ¡rio adicionado',
	'alb_updated' => 'Album atualizado',
	'err_comment_empty' => 'Seu comentÃ¡rio estÃ¡ vazio !',
	'err_invalid_fext' => 'Somente os arquivos com as seguines extenÃ§Ãµes sÃ£o 
permitidos : <br /><br />%s.',
	'no_flood' => 'Desculpe mas vocÃª Ã© o Ãºltimo autor a enviar um comentÃ¡rio<br 
/><br />Edite o comentÃ¡rio se deseja alterÃ¡-lo',
	'redirect_msg' => 'VocÃª estÃ¡ sendo redirecionado.<br /><br /><br />Clique 
\'CONTINUE\' se a pÃ¡gina nÃ£o se atualizar automaticamente',
	'upl_success' => 'Sua foto foi adicionada com sucesso',
	'email_comment_subject' => 'ComentÃ¡rio postado', //cpg1.3.0
	'email_comment_body' => 'Alguem postou um comentÃ¡rio na sua galeria. Veja-o 
em', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File delete.php
// ------------------------------------------------------------------------- 
//

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Sub-TÃ­tulo',
	'fs_pic' => 'tamanho total da foto',
	'del_success' => 'deletado com sucesso',
	'ns_pic' => 'tamanho normal da foto',
	'err_del' => 'nÃ£o pode ser excluÃ­do',
	'thumb_pic' => 'miniatura',
	'comment' => 'comentÃ¡rio',
	'im_in_alb' => 'foto no album',
	'alb_del_success' => 'Album \'%s\' DELETADO',
	'alb_mgr' => 'Gerenciador de albums',
	'err_invalid_data' => 'Dados recebidos invÃ¡lidos \'%s\'',
	'create_alb' => 'Criando album \'%s\'',
	'update_alb' => 'Atualizando album \'%s\' tÃ­tulo \'%s\' Ã­ndice \'%s\'',
	'del_pic' => 'Deletar arquivo',
	'del_alb' => 'Deletar album',
	'del_user' => 'UsuÃ¡rio usuÃ¡rio',
	'err_unknown_user' => 'O usuÃ¡rio selecionado nÃ£o existe !',
	'comment_deleted' => 'O comentÃ¡rio foi deletado com sucesso',
);

// ------------------------------------------------------------------------- 
//
// File displayecard.php
// ------------------------------------------------------------------------- 
//

// Void

// ------------------------------------------------------------------------- 
//
// File displayimage.php
// ------------------------------------------------------------------------- 
//

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
	'confirm_del' => 'Tem certeza que deseja EXCLUIR esta foto ? \\nComentÃ¡rios 
vinculados tambÃ©m serÃ£o excluÃ­dos.',
	'del_pic' => 'APAGAR ESTA FOTO',
	'size' => '%s x %s pixels',
	'views' => '%s vezes',
	'slideshow' => 'Slideshow',
	'stop_slideshow' => 'PARAR SLIDESHOW',
	'view_fs' => 'Clique para ver a foto ampliada',
	'edit_pic' => 'Editar descriÃ§Ã£o', //cpg1.3.0
	'crop_pic' => 'Girar', //cpg1.3.0
);

$lang_picinfo = array(
	'title' =>'INFORMAÃ‡Ã•ES DA FOTO',
	'Filename' => 'Arquivo',
	'Album name' => 'Album',
	'Rating' => 'ClassificaÃ§Ã£o (%s voto(s))',
	'Keywords' => 'Palavras-chave',
	'File Size' => 'Tamanho do arquivo',
	'Dimensions' => 'DimensÃµes',
	'Displayed' => 'Visualizada',
	'Camera' => 'Camera',
	'Date taken' => 'Foto tirada em',
	'Aperture' => 'Abertura',
	'Exposure time' => 'Tempo de exposiÃ§Ã£o',
	'Focal length' => 'Largura focal',
	'Comment' => 'ComentÃ¡rio',
	'addFav'=>'Adicionar a favoritos', //cpg1.3.0
	'addFavPhrase'=>'Favoritos', //cpg1.3.0
	'remFav'=>'Remover dos Favoritos', //cpg1.3.0
	'iptcTitle'=>'Titulo IPTC', //cpg1.3.0
	'iptcCopyright'=>'Copyright IPTC', //cpg1.3.0
	'iptcKeywords'=>'Palavras-chave IPTC', //cpg1.3.0
	'iptcCategory'=>'Categoria IPTC', //cpg1.3.0
	'iptcSubCategories'=>'Sub-Categorias IPTC', //cpg1.3.0

);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => 'Editar este comentÃ¡rio',
	'confirm_delete' => 'Tem certeza de REMOVER este comentÃ¡rio ?',
	'add_your_comment' => 'Adicione seu comentÃ¡rio',
	'name'=>'Nome',
	'comment'=>'ComentÃ¡rio',
	'your_name' => 'Seu nome',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Clique na imagem para fechar esta janela',
);

}

// ------------------------------------------------------------------------- 
//
// File ecard.php
// ------------------------------------------------------------------------- 
//

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php 
=array(
	'title' => 'Enviar um e-card',
	'invalid_email' => '<b>Aviso</b> : email invÃ¡lido !',
	'ecard_title' => '%s enviou um e-card pra vocÃª!',
	'error_not_image' => 'Apenas imagens pode ser enviadas como ecard.', 
//cpg1.3.0
	'view_ecard' => 'Se vocÃª nÃ£o esta conseguindo visualizar nada clique aqui',
	'view_more_pics' => 'Clique aqui para ver mais fotos !',
	'send_success' => 'Seu e-card foi enviado!',
	'send_failed' => 'Desculpe, mas o servidor nÃ£o pode enviar seu e-card...',
	'from' => 'Remetente',
	'your_name' => 'Seu nome',
	'your_email' => 'Seu e-mail',
	'to' => 'Para',
	'rcpt_name' => 'DestinatÃ¡rio',
	'rcpt_email' => 'E-mail do destinatÃ¡rio',
	'greetings' => 'SaudaÃ§Ãµes',
	'message' => 'Mensagem',
);

// ------------------------------------------------------------------------- 
//
// File editpics.php
// ------------------------------------------------------------------------- 
//

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => '&nbsp;Info da Foto',
	'album' => 'Album',
	'title' => 'TÃ­tulo',
	'desc' => 'DescriÃ§Ã£o',
	'keywords' => 'Palavras-chave',
	'pic_info_str' => '%sx%s - %sKB - %s visitas - %s votos',
	'approve' => 'Aprovar foto',
	'postpone_app' => 'Postpone approval',
	'del_pic' => 'Apagar foto',
	'read_exif' => 'Ler EXIF novamente', //cpg1.3.0
	'reset_view_count' => 'Zerar contador',
	'reset_votes' => 'Zerar votos',
	'del_comm' => 'Excluir comentÃ¡rios',
	'upl_approval' => 'Aprovar envio',
	'edit_pics' => 'Editar fotos',
	'see_next' => 'Ver prÃ³ximas fotos',
	'see_prev' => 'Ver fotos anteriores',
	'n_pic' => '%s fotos',
	'n_of_pic_to_disp' => 'NÃºmero de fotos a mostrar',
	'apply' => 'Aplicar modificaÃ§Ãµes',
	'crop_title' => 'Editor de Fotos', //cpg1.3.0
	'preview' => 'PrÃ©-visualizar', //cpg1.3.0
	'save' => 'Salvar foto', //cpg1.3.0
	'save_thumb' =>'Salvar como miniatura', //cpg1.3.0
	'sel_on_img' =>'A seleÃ§Ã£o tem que ser na imagem inteira!', //js-alert 
//cpg1.3.0

);

// ------------------------------------------------------------------------- 
//
// File faq.php //cpg1.3.0
// Ainda nÃ£o traduzi.
// ------------------------------------------------------------------------- 
//

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Perguntas mais frequentes', //cpg1.3.0
  'toc' => 'ConteÃºdo', //cpg1.3.0
  'question' => 'Pergunta: ', //cpg1.3.0
  'answer' => 'Resposta: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array('DÃºvidas Gerais', //cpg1.3.0
  array('Por que eu preciso me registrar?', 'RegistraÃ§Ã£o deve ou nÃ£o deve ser requerida pelo administrador. O registro da ao usuÃ¡rio, caracterÃ­sticas adicionais como envio de fotos, listas favoritas, votar e postar comentÃ¡rios.', 'allow_user_registration', '0'), //cpg1.3.0
  array('Como eu faÃ§o para me registrar?', 'VÃ¡ em &quot;Registrar-se&quot; e preencha os campos obrigatÃ³rios (e os opcionais tambÃ©m se vocÃª quiser).<br />Se o Administrador tiver a AtivaÃ§Ã£o de Email ativada, entÃ£o apÃ³s o envio de suas informaÃ§Ãµes vocÃª irÃ¡ receber um email informando-o sobre o registro e, lhe dando instruÃ§Ãµes para a ativaÃ§Ã£o da conta. Sua conta deve ser ativada antes de vocÃª tentar logar.', 'allow_user_registration', '1'), //cpg1.3.0
  array('Como eu faÃ§o para logar?', 'VÃ¡ em &quot;Login&quot;, insira seu usuÃ¡rio e senha (marque &quot;Salvar Senha&quot; caso vocÃª queira se logar automaticamente), apÃ³s isto vocÃª estarÃ¡ logado.<br /><b>IMPORTANTE:Seu navegador deve esta habilitado para aceitar Cookies e ele nÃ£o deve ser deletado se vocÃª quiser manter a funcionalidade da opÃ§Ã£o &quot;Salvar 
Senha&quot;.</b>', 'offline', 0), //cpg1.3.0
  array('Porque eu nÃ£o consigo logar?', 'VocÃª se registrou e ativou sua conta?. Ã‰ necessario ativar a conta antes de acessa-lÃ¡. Para outros tipos de problema para acessar a conta entre em contato com o administrador do site.', 'offline', 0), //cpg1.3.0
  array('O que acontece se eu esquecer minha senha?', 'Se este site tiver o link &quot;Esqueci minha senha&quot;, use ele. Se nÃ£o houver, contacte o administrador para pedir uma nova senha.', 'offline', 0), //cpg1.3.0
  //array('What if I changed my email address?', 'Just simply login and change yor email address through quot;Profile&quot;', 'offline', 0), //cpg1.3.0
  array('Como eu salvo uma imagem em &quot;Meus Favoritos&quot;?', 'Clique na figura e depois clique em &quot;informaÃ§Ãµes da foto&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="InformaÃ§Ãµes da Foto" />); procure um pouco mais abaixo e entao clique em &quot;Adicionar a favoritos&quot;.<br />O administrador deve ter a opÃ§Ã£o de &quot;InformaÃ§Ãµes da Foto&quot; ativada por padrÃ£o.<br />IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted.', 'offline', 0), //cpg1.3.0
  array('Como eu voto numa foto?', 'Na pÃ¡gina da foto abaixo dela tem 6 opÃ§Ãµes de voto.', 'offline', 0), //cpg1.3.0
  array('Como eu posto um comentÃ¡rio para uma foto?', 'Na pÃ¡gina da foto tem um campo disponÃ­vel para vocÃª postar seu comentÃ¡rio.', 'offline', 0), //cpg1.3.0
  array('Como eu envio uma foto?', 'VÃ¡ em &quot;Enviar foto&quot;e selecione o album para o qual vocÃª deseja enviar a foto, clique em &quot;Procurar&quot; e procure a foto para enviar entao clique em &quot;Abrir&quot; (adicione um titulo e uma descriÃ§Ã£o se vocÃª desejar) e clique em &quot;CONTINUAR&quot;', 'allow_private_albums', 0), //cpg1.3.0
  array('Para onde eu posso enviar a foto?', 'VocÃª poderÃ¡ enviar a foto para um dos albums que tiver em &quot;Minha Galeria&quot;. O administrador pode permitir que vocÃª envie uma foto para um ou mais albums da galeria Principal.', 'allow_private_albums', 0), //cpg1.3.0
  array('Qual tipo e qual tamanho de foto eu posso enviar?', 'O tamanho e o tipo da foto (jpg,gif,..etc.) depende do administrador.', 'offline', 0), //cpg1.3.0
  array('O que Ã© &quot;Minha Galeria&quot;?', '&quot;Minha Galeria&quot; Ã© uma galeria pessoal onde o usuÃ¡rio pode enviar suas fotos e gerencia-las.', 'allow_private_albums', 0), //cpg1.3.0
  array('Como eu crio,renomeio ou deleto um album na &quot;Minha Galeria&quot;?', 'VocÃª deve estar no &quot;Modo-Admin&quot;<br />VÃ¡ em &quot;Criar/Ordenar Meus Albums&quot;e clicar em&quot;Novo&quot;. Altere o nome &quot;Novo Album&quot; para o nome que vocÃª desejar.<br />VocÃª tambem pode renomear qualquer album na sua galeria.<br />Ao fim de tudo clique em &quot;Aplicar ModificaÃ§Ãµes&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Como eu posso restringir usuÃ¡rios de verem meus albums?', 'VocÃª deve estar no &quot;Modo-Admin&quot;<br />VÃ¡ em &quot;Modificar Meus Albums. Na barra &quot;Atualizar Album&quot;, selecione o album que vocÃª deseja modificar.<br />Aqui vocÃª pode alterar o nome, a descriÃ§Ã£o, a figura da miniatura, restringir a visualizaÃ§Ã£o e/ou postar comentarios/votar.<br 
/>Click &quot;Update Album&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('Como eu posso ver outros usuÃ¡rios da galeria?', 'VÃ¡ em &quot;Albums&quot; e depois clique em Membros &quot;Membros&quot;.', 'allow_private_albums', 0), //cpg1.3.0
  array('O que sÃ£o cookies?', 'Cookies sÃ£o partes de informaÃ§Ãµes que ficam salvas em seu computador.<br />Cookies geralmente permitem ao usuÃ¡rio sair e quando voltar ao site ter varias informaÃ§Ãµes salvas incluindo senha salva de login.', 'offline', 0), //cpg1.3.0
  //array('Aonde eu posso encontrar este programa para o meu site?', 'Coppermine is a free Multimedia Gallery, released under GNU GPL. It is full of features and has been ported to various platforms. Visit the <a href="http://coppermine.sf.net/">Coppermine Home Page</a> to find out more or download it.', 'offline', 0), //cpg1.3.0

  'Navegando no Site', //cpg1.3.0
  array('O que Ã© o botÃ£o &quot;Albums&quot;?', 'Isto irÃ¡ mostrar toda a galeria com o link de cada categoria. Miniatura podem ser um link para uma categoria.', 'offline', 0), //cpg1.3.0
  array('O que Ã© o botÃ£o &quot;Minha Galeria&quot;?', 'Esta Ã© uma caracteristica que permite ao usuÃ¡rio ter sua prÃ³pria galeria, adicionar, deletar ou modificar albums bem como enviar fotos.', 'allow_private_albums', 0), //cpg1.3.0
  array('Qual Ã© a diferenÃ§a entre &quot;Modo Admin&quot; e &quot;Modo usuÃ¡rio&quot;?', 'Esta Ã© uma caracterisca que permite ao usuÃ¡rio, quando em modo-admin, modificar suas galerias (e outras coisas se permitido pelo administrador).', 'allow_private_albums', 0), //cpg1.3.0
  array('O que Ã© o botÃ£o &quot;Enviar foto&quot;?', 'Isto permite ao usuÃ¡rio enviar uma foto (tamanho e tipo sÃ£o definidos pelo adminstrador do site) para a galeria selecionada por vocÃª ou pelo administrador.', 'allow_private_albums', 0), //cpg1.3.0
  array('O que Ã© o botÃ£o &quot;Ãšltimos envios&quot;?', 'Neste link vocÃª verÃ¡ a listagem das ultimas foto adicionadas ao site.', 'offline', 0), //cpg1.3.0
  array('O que Ã© o botÃ£o &quot;Ãšltimos ComentÃ¡rios&quot;?', 'Aqui vocÃª verÃ¡ os ultimos comentÃ¡rio juntamente com suas respectivas fotos em miniatura.', 'offline', 0), //cpg1.3.0
  array('O que Ã© o botÃ£o &quot;Mais visualizadas&quot;?', 'Aqui vocÃª verÃ¡ as fotos listadas por \'Mais Visualizadas\' (tanto por usuÃ¡rio cadastrados com nÃ£o).', 'offline', 0), //cpg1.3.0
  array('O que Ã© o botÃ£o &quot;Mais Popularidade&quot;?', 'Nesta parte vocÃª verÃ¡ as fotos que estÃ£o com mais popularidade, incluindo os dados dessa popularidade (ex: 5 usuarios deram nota <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: qualificando-a como 1 para 5 (1,2,3,4,5) o que resultarÃ¡ numa mÃ©dia de <img src="images/rating3.gif" 
width="65" height="14" border="0" alt="" /> .)<br />As qualificaÃ§Ãµes vÃ£o de <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (boa) atÃ© <img src="images/rating0.gif" width="65" height="14" border="0" 
alt="worst" /> (terrivel).', 'offline', 0), //cpg1.3.0
  array('O que Ã© o botÃ£o &quot;Meus favoritos&quot;?', 'Neste area vocÃª poderÃ¡ ver as fotos que vocÃª adicionou em seu favoritos. Esse favoritos serÃ¡ salvo como cookie e ficarÃ¡ salvo em seu computador.', 'offline', 0), //cpg1.3.0
);


// ------------------------------------------------------------------------- 
//
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- 
//

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Lembrete de Senha', //cpg1.3.0
  'err_already_logged_in' => 'VocÃª jÃ¡ esta logado !', //cpg1.3.0
  'enter_username_email' => 'Informe seu login e seu email', //cpg1.3.0
  'submit' => 'Enviar', //cpg1.3.0
  'failed_sending_email' => 'O Lembrete da sua senha nÃ£o pode ser enviado 
para seu email !', //cpg1.3.0
  'email_sent' => 'Um email com seu usuÃ¡rio e sua senha foi enviado para 
%s', //cpg1.3.0
  'err_unk_user' => 'O usuÃ¡rio selecionado nÃ£o existe!', //cpg1.3.0
  'passwd_reminder_subject' => '%s - Lembrete de Senha', //cpg1.3.0
  'passwd_reminder_body' => 'VocÃª solicitou o lembrete de sua senha:
UsuÃ¡rio: %s
Senha: %s
Acesse %s para logar-se.', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File groupmgr.php
// ------------------------------------------------------------------------- 
//

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Nome do Grupo',
	'disk_quota' => 'Quota de disco',
	'can_rate' => 'Pode avaliar foto',
	'can_send_ecards' => 'Pode enviar e-cards',
	'can_post_com' => 'Pode enviar comentÃ¡rios',
	'can_upload' => 'Pode enviar fotos',
	'can_have_gallery' => 'Pode ter uma galeria pessoal',
	'apply' => 'Aplicar modificaÃ§Ãµes',
	'create_new_group' => 'Criar novo grupo',
	'del_groups' => 'Apagar grupo(s) selecionado(s)',
	'confirm_del' => 'CUIDADO: Ao remover um grupo seu conteÃºdo serÃ¡ 
transferido para \'Registrado\' !\n\nquer continuar ?',
	'title' => 'Gerenciar grupos',
	'approval_1' => 'AprovaÃ§Ã£o pÃºblica (1)',
	'approval_2' => 'AprovaÃ§Ã£o privada (2)',
	'upload_form_config' => 'FormulÃ¡rio de configuraÃ§Ã£o de upload', //cpg1.3.0
  	'upload_form_config_values' => array( 'Envio de um arquivo', 'Envio de 
vÃ¡rios arquivos', 'Envio de URI', 'Envio de ZIP', 'Arquivo-URI', 
'Arquivo-ZIP', 'URI-ZIP', 'Arquivo-URI-ZIP'), //cpg1.3.0
	'custom_user_upload'=>'UsuÃ¡rios devem personalizar o numero de caixas de 
envio?', //cpg1.3.0
	'num_file_upload'=>'Numero mÃ¡ximo ou exato de caixas de envio', //cpg1.3.0
	'num_URI_upload'=>'Numero mÃ¡ximo ou exato de caixas de envio URI', 
//cpg1.3.0
	'note1' => '<b>(1)</b> Envios para um album pÃºblico requerem aprovaÃ§Ã£o do 
administrador',
	'note2' => '<b>(2)</b> Envios requerem aprovaÃ§Ã£o do administrador',
	'notes' => 'Notas'
);

// ------------------------------------------------------------------------- 
//
// File index.php
// ------------------------------------------------------------------------- 
//

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Seja Bem Vindo!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Tem certeza que deseja EXCLUIR este album ? \\nTodas 
as fotos e comentÃ¡rios serÃ£o excluÃ­dos.',
	'delete' => 'EXCLUIR',
	'modify' => 'PROPRIEDADES',
	'edit_pics' => 'EDITAR FOTOS',
);

$lang_list_categories = array(
	'home' => 'Inicio',
	'stat1' => '<b>[pictures]</b> fotos em <b>[albums]</b> albums e 
<b>[cat]</b> categorias com <b>[comments]</b> comentÃ¡rios vistos 
<b>[views]</b> vezes',
	'stat2' => '<b>[pictures]</b> fotos em <b>[albums]</b> albums visitadas 
<b>[views]</b> vezes',
	'xx_s_gallery' => '%s\'s Galeria',
	'stat3' => '<b>[pictures]</b> fotos em <b>[albums]</b> albums com 
<b>[comments]</b> comentÃ¡rios, visitadas <b>[views]</b> vezes'
);

$lang_list_users = array(
	'user_list' => 'Lista de usuÃ¡rios',
	'no_user_gal' => 'Nenhum usuÃ¡rio Ã© permitido a ter albums',
	'n_albums' => '%s album(s)',
	'n_pics' => '%s foto(s)'
);

$lang_list_albums = array(
	'n_pictures' => '%s foto(s)',
	'last_added' => ', Ãºltima foto adicionada em %s'
);

}

// ------------------------------------------------------------------------- 
//
// File login.php
// ------------------------------------------------------------------------- 
//

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Login',
  'enter_login_pswd' => 'Insira seu nome de usuÃ¡rio e senha para entrar',
  'username' => 'UsuÃ¡rio',
  'password' => 'Senha',
  'remember_me' => 'Salvar Senha',
  'welcome' => 'Seja Bem Vindo(a) %s ...',
  'err_login' => '*** NÃ£o foi possivel logar. Tente novamente ***',
  'err_already_logged_in' => 'VocÃª jÃ¡ esta logado !',
  'forgot_password_link' => 'Esqueci minha senha', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File logout.php
// ------------------------------------------------------------------------- 
//

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Logout',
  'bye' => 'Volte Sempre %s ...',
  'err_not_loged_in' => 'VocÃª nÃ£o esta logado !',
);

// ------------------------------------------------------------------------- 
//
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- 
//

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'Info PHP', //cpg1.3.0
  'explanation' => 'Esta Ã© a saida gerada pela funÃ§Ã£o <a 
href="http://www.php.net/phpinfo">phpinfo()</a>, mostrada com as informaÃ§Ãµes 
da galeria.', //cpg1.3.0
  'no_link' => 'Deixar que outras pessoas vejam sua saida phpinfo() pode ser 
um risco de seguranÃ§a, este Ã© o motivo desta pÃ¡gina so ser mostrada quando 
vocÃª estÃ¡ logada como admin. VocÃª nÃ£o pode postar o link desta pÃ¡gina para 
outros, eles terÃ£o acesso negado.', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File modifyalb.php
// ------------------------------------------------------------------------- 
//

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Atualizar album %s',
	'general_settings' => 'ConfiguraÃ§Ãµes gerais',
	'alb_title' => 'TÃ­tulo do album',
	'alb_cat' => 'Categoria do album',
	'alb_desc' => 'DescriÃ§Ã£o do album',
	'alb_thumb' => 'Miniatura do album',
	'alb_perm' => 'PermissÃµes para este album',
	'can_view' => 'Album pode ser visto por',
	'can_upload' => 'Visitantes podem enviar fotos',
	'can_post_comments' => 'Visitantes podem enviar comentÃ¡rios',
	'can_rate' => 'Visitantes podem votar nas fotos',
	'user_gal' => 'Galeria do UsuÃ¡rio',
	'no_cat' => '* Sem categoria *',
	'alb_empty' => 'Album vazio',
	'last_uploaded' => 'Ãšltimo envio',
	'public_alb' => 'Todos (album pÃºblico)',
	'me_only' => 'Apenas eu',
	'owner_only' => 'Apenas o dono do album (%s)',
	'groupp_only' => 'Membros do grupo\'%s\' ',
	'err_no_alb_to_modify' => 'VocÃª nÃ£o pode modificar nenhum album no banco de 
dados.',
	'update' => 'Atualizar album',
  	'notice1' => '(*) dependendo das configuraÃ§Ãµes dos %sgrupos%s', 
//cpg1.3.0 (do not translate %s!)
);

// ------------------------------------------------------------------------- 
//
// File ratepic.php
// ------------------------------------------------------------------------- 
//

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Desculpe, mas vocÃª jÃ¡ avaliou esta foto',
	'rate_ok' => 'Seu voto foi aceito',
	'forbidden' => 'VocÃª nÃ£o pode votar nas suas prÃ³prias fotos.', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File register.php & profile.php
// ------------------------------------------------------------------------- 
//

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Enquanto os administradores do site ( {SITE_NAME} ) irÃ£o tentar remover 
qualquer conteudo, em geral, indesejÃ¡vel, Ã© impossivel revisar todas as 
postagens, vocÃª reconhece que todas as postagens feitas por vocÃª neste site 
expressam as suas opniÃµes e nÃ£o as dos administradores ou do webmaster (com 
excessÃ£o das postagens dos mesmos) isentando-os de qualquer 
responsabilidade.<br />
<br />
VocÃª concorda nÃ£o postar nenhum material abusivo, obsceno, vulgar, odiavel, 
que indique sexualidade ou qualquer outro material que viole qualquer lei 
aplicavel. VocÃª concorda que qualquer Webmaster, Administrador e moderador 
do site ( {SITE_NAME} ) tem o direito de remover, editar QUALQUER conteudo a 
qualquer hora que seja necessÃ¡rio. Como usuÃ¡rio vocÃª concorda que todas as 
informaÃ§Ãµes dadas por vocÃª serÃ£o guardadas no nosso banco de dados, desde 
que esta informaÃ§Ã£o nÃ£o seja enviada a nenhuma terceira pessoa sem seu 
consentimento. O Webmaster e o Administrador nÃ£o se responsibilizarÃ£o por 
nenhuma aÃ§Ã£o hacker que possa comprometer os dados.<br />
<br />
Este site usa cookies para armazenar informaÃ§Ãµes no seu computador. Este 
cookies servem apenas para prover maior tecnologia ao site. Seu email Ã© 
usado apenas para confirmar os detalhes do seu registro e sua senha.<br />
<br />
Clicando em 'Eu Aceito', vocÃª concorda com todos essas condiÃ§Ãµes.
EOT;

$lang_register_php = array(
	'page_title' => 'REGISTRO DE USUÃRIO',
	'term_cond' => 'Termos e condiÃ§Ãµes',
	'i_agree' => 'Eu Aceito',
	'submit' => 'Enviar Registro',
	'err_user_exists' => 'Este nome de usuÃ¡rio jÃ¡ existe, por favor tente 
outro',
	'err_password_mismatch' => 'As duas senhas digitadas nÃ£o conferem. Digite 
com cuidado novamente',
	'err_uname_short' => 'Nome de usuÃ¡rio precisa ter no mÃ­nimo 2 caracteres',
	'err_password_short' => 'Sua senha tem que ter no mÃ­nimo 2 caracteres',
	'err_uname_pass_diff' => 'Nome de usuÃ¡rio e senha devem ser diferentes',
	'err_invalid_email' => 'EndereÃ§o de e-mail invÃ¡lido',
	'err_duplicate_email' => 'JÃ¡ existe outro usuÃ¡rio registrado com este 
e-mail',
	'enter_info' => 'Entre com as informaÃ§Ãµes de registro',
	'required_info' => 'InformaÃ§Ã£o ObrigatÃ³ria',
	'optional_info' => 'InformaÃ§Ã£o Opcional',
	'username' => 'UsuÃ¡rio',
	'password' => 'Senha',
	'password_again' => 'Re-digite a senha',
	'email' => 'E-mail',
	'location' => 'EndereÃ§o',
	'interests' => 'Interesses',
	'website' => 'Home page',
	'occupation' => 'ProfissÃ£o',
	'error' => 'ERRO',
	'confirm_email_subject' => '%s - CONFIRMAÃ‡ÃƒO DE REGISTRO',
	'information' => 'InformaÃ§Ã£o',
	'failed_sending_email' => 'O e-mail de confirmaÃ§Ã£o de registro nÃ£o pÃ´de ser 
enviado !',
	'thank_you' => 'Obrigado por registrar-se.<br /><br />As informaÃ§Ãµes para 
finalizar seu registro foram enviadas para seu e-mail.',
	'acct_created' => 'Sua conta foi criada e agora vocÃª pode logar com seu 
usuÃ¡rio e sua senha',
	'acct_active' => 'Sua conta jÃ¡ estÃ¡ ativa. Entre com seu usuÃ¡rio e senha 
para logar',
	'acct_already_act' => 'Sua conta jÃ¡ estÃ¡ ativa !',
	'acct_act_failed' => 'Esta conta ainda nÃ£o estÃ¡ ativa  !',
	'err_unk_user' => 'UsuÃ¡rio selecionado nÃ£o existe !',
	'x_s_profile' => 'Perfil de %s',
	'group' => 'Grupo',
	'reg_date' => 'Participante',
	'disk_usage' => 'Uso do disco',
	'change_pass' => 'Alterar senha',
	'current_pass' => 'Senha atual',
	'new_pass' => 'Nova senha',
	'new_pass_again' => 'Re-digite a nova senha',
	'err_curr_pass' => 'Senha atual INCORRETA',
	'apply_modif' => 'Salvar modificaÃ§Ãµes',
	'change_pass' => 'Alterar minha senha',
	'update_success' => 'Seus dados foram atualizados',
	'pass_chg_success' => 'Sua senha foi alterada',
	'pass_chg_error' => 'Sua senha nÃ£o foi alterada',
	'notify_admin_email_subject' => '%s - NotificaÃ§Ã£o de Registro', //cpg1.3.0
	'notify_admin_email_body' => 'O usuÃ¡rio "%s" foi registrado na sua 
galeria', //cpg1.3.0
);

$lang_register_confirm_email = <<<EOT
Obrigado por se registrar no {SITE_NAME}

Seu usuÃ¡rio Ã© : "{USER_NAME}"
Sua senha Ã© : "{PASSWORD}"

Para ativar sua conta vocÃª precisa acessar o link abaixo:
Clique ou copie e cole no seu Browser

{ACT_LINK}

Obrigado pela registro,

Grato,
Administrador
{SITE_NAME}

EOT;

}

// ------------------------------------------------------------------------- 
//
// File reviewcom.php
// ------------------------------------------------------------------------- 
//

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Revisar comentÃ¡rios',
	'no_comment' => 'NÃ£o hÃ¡ comentÃ¡rios para revisar',
	'n_comm_del' => '%s comentÃ¡rio(s) deletato(s)',
	'n_comm_disp' => 'NÃºmero de comentÃ¡rios para visualizar',
	'see_prev' => 'Anterior',
	'see_next' => 'PrÃ³ximo',
	'del_comm' => 'Deletar comentÃ¡rios selecionados',
);


// ------------------------------------------------------------------------- 
//
// File search.php - OK
// ------------------------------------------------------------------------- 
//

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Pesquisar na galeria de fotos',
);

// ------------------------------------------------------------------------- 
//
// File searchnew.php
// ------------------------------------------------------------------------- 
//

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Pesquisar novas fotos',
	'select_dir' => 'Selecionar diretÃ³rio',
	'select_dir_msg' => 'Esta funÃ§Ã£o lhe permite enviar diversas fotos ao mesmo 
tempo.<br /><br />Selecione o diretÃ³rio das fotos',
	'no_pic_to_add' => 'NÃ£o hÃ¡ fotos para adicionar',
	'need_one_album' => 'VocÃª precisa ter pelo menus um album para usar esta 
funÃ§Ã£o',
	'warning' => 'CUIDADO',
	'change_perm' => 'O script nÃ£o pode gravar neste diretÃ³rio que deve possuir 
permissÃ£o 755 ou 777 !',
	'target_album' => '<b>Colocar fotos do &quot;</b>%s<b>&quot; em </b>%s',
	'folder' => 'Pasta',
	'image' => 'Foto',
	'album' => 'Album',
	'result' => 'Resultado',
	'dir_ro' => 'NÃ£o gravÃ¡vel. ',
	'dir_cant_read' => 'NÃ£o pode ser lido. ',
	'insert' => 'Adicionando novas fotos Ã  galeria',
	'list_new_pic' => 'Lista das novas fotos',
	'insert_selected' => 'Inserir fotos selecionadas',
	'no_pic_found' => 'Nenhuma foto nova foi encontrada',
	'be_patient' => 'Por favor tenha paciÃªncia. O sistema nescessita de tempo 
para enviar as fotos',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : Significa que foi enviado com sucesso'.
				'<li><b>DP</b> : Significa que existe uma duplicata na base de dados'.
				'<li><b>PB</b> : Significa que nÃ£o pÃ´de ser enviado, verifique sua 
configuraÃ§Ã£o e as permissÃµes dos diretÃ³ris.'.
				'<li><b>NA</b> : Significa que vocÃª nÃ£o selecionou nenhum album para 
adicionar as fotos, clique em \'<a 
href="javascript:history.back(1)">voltar</a>\' e seleciona um album. Se vocÃª 
nÃ£o tem um album <a href="albmgr.php">crie um primeiro</a></li>'.
				'<li>Se um dos \'simbolos\' OK, DP ou PB nÃ£o aparecerem clique no 
simbolo com problema para receber a mensagem de erro'.
				'<li>Se o tempo expirar, tente novamente atualizando a pÃ¡gina'.
				'</ul>', //cpg1.3.0
	'select_album' => 'selecionar album', //cpg1.3.0
	'check_all' => 'Marcar Tudo', //cpg1.3.0
	'uncheck_all' => 'Desmarcar Tudo', //cpg1.3.0
);


// ------------------------------------------------------------------------- 
//
// File thumbnails.php
// ------------------------------------------------------------------------- 
//

// Void

// ------------------------------------------------------------------------- 
//
// File banning.php
// ------------------------------------------------------------------------- 
//

if (defined('BANNING_PHP')) $lang_banning_php = array(
	'title' => 'Banir UsuÃ¡rios',
	'user_name' => 'Nome do usuÃ¡rio',
	'ip_address' => 'IP',
	'expiry' => 'Expira em (em branco significa que Ã© permanente)',
	'edit_ban' => 'Salvar AlteraÃ§Ãµes',
	'delete_ban' => 'Deletar',
	'add_new' => 'Adicionar novo Ban',
	'add_ban' => 'Adicionar',
	'error_user' => 'NÃ£o foi possÃ­vel encontrar o usuÃ¡rio', //cpg1.3.0
	'error_specify' => 'VocÃª precisa especificar um usuÃ¡rio ou IP', //cpg1.3.0
	'error_ban_id' => 'ID de ban invÃ¡lido!', //cpg1.3.0
	'error_admin_ban' => 'VocÃª nÃ£o pode banir vocÃª mesmo!', //cpg1.3.0
	'error_server_ban' => 'VocÃª vai banir seu prÃ³prio servidor? VocÃª nÃ£o pode 
fazer isso...', //cpg1.3.0
	'error_ip_forbidden' => 'VocÃª nÃ£o pode banir este IP - este nÃ£o Ã© 
roteavel!', //cpg1.3.0
	'lookup_ip' => 'Olhe um IP acima', //cpg1.3.0
	'submit' => 'Enviar!', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File upload.php
// ------------------------------------------------------------------------- 
//

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Envio de Foto', //cpg1.3.0
  'custom_title' => 'Formulario de Pedidos personalizÃ¡vel', //cpg1.3.0
  'cust_instr_1' => 'VocÃª deve selecionar um numero personalizÃ¡vel de caixas 
de envio. Entretando vocÃª nÃ£o pode selecionar mais do que os limites setados 
abaixo.', //cpg1.3.0
  'cust_instr_2' => 'Numero de Caixas de Pedidos', //cpg1.3.0
  'cust_instr_3' => 'Caixas de envio de arquivo: %s', //cpg1.3.0
  'cust_instr_4' => 'Caixas de envio de URI/URL: %s', //cpg1.3.0
  'cust_instr_5' => 'Caixas de envio de URI/URL:', //cpg1.3.0
  'cust_instr_6' => 'Caixas de envio de arquivo:', //cpg1.3.0
  'cust_instr_7' => 'Por favor insira o numero de cada tipo de caixa de 
envio que vocÃª deseja desta vez e clique em \'Continuar\'. ', //cpg1.3.0
  'reg_instr_1' => 'AÃ§Ã£o invÃ¡lida para o formulÃ¡rio de criaÃ§Ã£o.', //cpg1.3.0
  'reg_instr_2' => 'Agora vocÃª deve enviar seus arquivos usando as caixas de 
envio abaixo. Os arquivos a serem enviados para o servidor nÃ£o podem exceder 
o tamanho de %s KB cada. Arquivos ZIP enviados pela seÃ§Ã£o de \'Envio de 
Arquivo\' e \'Envio de URI/URL\' irÃ£o permanecer compactados.', //cpg1.3.0
  'reg_instr_3' => 'Se vocÃª quiser o arquivo zipado ou que o arquivo seja 
descompactado, vocÃª deve usar a caixa de envio especial para isto, area 
\'Envio de ZIP com descompactaÃ§Ã£o\'.', //cpg1.3.0
  'reg_instr_4' => 'Quando usar a seÃ§Ã£o de envio URI/URL, por favor insira o 
caminho para o arquivo. Ex: http://www.meusite.com.br/imagens/foto.jpg', 
//cpg1.3.0
  'reg_instr_5' => 'Quando vocÃª terminar de completar o formulÃ¡rio, por 
favor clique em \'Continuar\'.', //cpg1.3.0
  'reg_instr_6' => 'Envio de ZIP com descompactaÃ§Ã£o:', //cpg1.3.0
  'reg_instr_7' => 'Envio de arquivos:', //cpg1.3.0
  'reg_instr_8' => 'Envio de URI/URL:', //cpg1.3.0
  'error_report' => 'RelatÃ³rio de Erro', //cpg1.3.0
  'error_instr' => 'Ocorreram erros nos seguintes envios:', //cpg1.3.0
  'file_name_url' => 'Arquivo/URL', //cpg1.3.0
  'error_message' => 'Mensagem de Erro', //cpg1.3.0
  'no_post' => 'Nenhum arquivo selecionado.', //cpg1.3.0
  'forb_ext' => 'ExtensÃ£o de arquivo proibida.', //cpg1.3.0
  'exc_php_ini' => 'Tamanho de arquivo excedido permitido pelo php.ini.', 
//cpg1.3.0
  'exc_file_size' => 'Tamanho de arquivo excedido permitido pela galeria.', 
//cpg1.3.0
  'partial_upload' => 'Apenas envio parcial.', //cpg1.3.0
  'no_upload' => 'Nenhum envio ocorrido.', //cpg1.3.0
  'unknown_code' => 'Codigo de erro PHP de envio, invÃ¡lido.', //cpg1.3.0
  'no_temp_name' => 'Nenhum envio - Nenhum nome temporÃ¡rio.', //cpg1.3.0
  'no_file_size' => 'Esta em branco/Corrompido', //cpg1.3.0
  'impossible' => 'Impossivel mover.', //cpg1.3.0
  'not_image' => 'NÃ£o Ã© uma imagem/corrompido', //cpg1.3.0
  'not_GD' => 'NÃ£o Ã© uma extensÃ£o GD.', //cpg1.3.0
  'pixel_allowance' => 'Tamanho de pixel excedido.', //cpg1.3.0
  'incorrect_prefix' => 'Prefixo de URI/URL incorreto', //cpg1.3.0
  'could_not_open_URI' => 'NÃ£o foi possivel abrir a URI.', //cpg1.3.0
  'unsafe_URI' => 'SeguranÃ§a nÃ£o verificÃ¡vel.', //cpg1.3.0
  'meta_data_failure' => 'Falha da Meta data', //cpg1.3.0
  'http_401' => '401 Unauthorized', //cpg1.3.0
  'http_402' => '402 Payment Required', //cpg1.3.0
  'http_403' => '403 Forbidden', //cpg1.3.0
  'http_404' => '404 Not Found', //cpg1.3.0
  'http_500' => '500 Internal Server Error', //cpg1.3.0
  'http_503' => '503 Service Unavailable', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME nÃ£o pode ser determinado.', //cpg1.3.0
  'MIME_type_unknown' => 'Tipo de MIME invÃ¡lido', //cpg1.3.0
  'cant_create_write' => 'NÃ£o foi possivel criar um arquivo gravÃ¡vel.', 
//cpg1.3.0
  'not_writable' => 'NÃ£o foi possivel gravar num arquivo gravÃ¡vel.', 
//cpg1.3.0
  'cant_read_URI' => 'NÃ£o foi possivel ler a URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'NÃ£o foi possivel abrir o arquivo URI 
gravavel.', //cpg1.3.0
  'cant_write_write_file' => 'NÃ£o foi possivel gravar no arquivo URI 
gravÃ¡vel.', //cpg1.3.0
  'cant_unzip' => 'NÃ£o foi possivel deszipar.', //cpg1.3.0
  'unknown' => 'Erro invÃ¡lido', //cpg1.3.0
  'succ' => 'Envio realizado com sucesso', //cpg1.3.0
  'success' => '%s envios com sucesso.', //cpg1.3.0
  'add' => 'Por favor clique em \'Continar\' para adicionar os arquivos nos 
albums.', //cpg1.3.0
  'failure' => 'Falha de envio', //cpg1.3.0
  'f_info' => 'InformaÃ§Ã£o do Arquivo', //cpg1.3.0
  'no_place' => 'O arquivo anterior nÃ£o pode ser inserido.', //cpg1.3.0
  'yes_place' => 'O arquivo anterior foi inserido com sucesso.', //cpg1.3.0
  'max_fsize' => 'O tamanho mÃ¡ximo permitido de arquivo Ã© %s KB',
  'album' => 'Album',
  'picture' => 'Foto', //cpg1.3.0
  'pic_title' => 'Titulo da Foto', //cpg1.3.0
  'description' => 'DescriÃ§Ã£o da Foto', //cpg1.3.0
  'keywords' => 'Palavras-Chave (separado com espaÃ§os)',
  'err_no_alb_uploadables' => 'Desculpe, vocÃª nÃ£o esta autorizado a enviar 
arquivos para nenhum album', //cpg1.3.0
  'place_instr_1' => 'Por favor insira os arquivo no album agora. VocÃª deve 
tambem inserir informaÃ§Ãµes sobre cada arquivo agora.', //cpg1.3.0
  'place_instr_2' => 'Mais arquivos precisam ser colocados. Por favor clique 
em \'Continuar\'.', //cpg1.3.0
  'process_complete' => 'VocÃª inseriu com sucesso todos os arquivos.', 
//cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File usermgr.php
// ------------------------------------------------------------------------- 
//

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Gerenciar usuÃ¡rios',
	'name_a' => 'Nome Ascendente',
	'name_d' => 'Nome Descendente',
	'group_a' => 'Grupo Ascendente',
	'group_d' => 'Grupo Descendente',
	'reg_a' => 'Data de registro Ascendente',
	'reg_d' => 'Data de registro Descendente',
	'pic_a' => 'Contagem de fotos ascendente',
	'pic_d' => 'Constagem de foto descendente',
	'disku_a' => 'Uso de disco ascendente',
	'disku_d' => 'Uso de disco descendente',
	'lv_a' => 'Ultima visita Ascendente', //cpg1.3.0
	'lv_d' => 'Ultima visita Descendente', //cpg1.3.0
	'sort_by' => 'Listar usuÃ¡rios por',
	'err_no_users' => 'A Tabela de usuÃ¡rios estÃ¡ vazia !',
	'err_edit_self' => 'VocÃª nÃ£o pode alterar seu dados \'pessoais\', use o 
link \'Meus dados\' para isto ',
	'edit' => 'EDITAR',
	'delete' => 'EXCLUIR',
	'name' => 'UsuÃ¡rio',
	'group' => 'Grupo',
	'inactive' => 'Inativo',
	'operations' => 'OperaÃ§Ãµes',
	'pictures' => 'Fotos',
	'disk_space' => 'EspaÃ§o usado / Quota',
	'registered_on' => 'Registrado em',
	'last_visit' => 'Ultima Visita', //cpg1.3.0
	'u_user_on_p_pages' => '%d usuÃ¡rio(s) em %d pÃ¡gina(s)',
	'confirm_del' => 'Tem certeza que quer EXCLUIR este usuÃ¡rio ? \\nTodas as 
fotos e albums dele serÃ£o removidos.',
	'mail' => 'EMAIL',
	'err_unknown_user' => 'UsuÃ¡rio selecionado nÃ£o existe !',
	'modify_user' => 'Modificar usuÃ¡rio',
	'notes' => 'Notas',
	'note_list' => '<li>Se vocÃª nÃ£o quer alterar sua senha, deixe o campo em 
branco',
	'password' => 'Senha',
	'user_active' => 'UsuÃ¡rio esta ativo',
	'user_group' => 'Grupo de usuÃ¡rios',
	'user_email' => 'Email do usuÃ¡rio',
	'user_web_site' => 'Site do usuÃ¡rio',
	'create_new_user' => 'Criar novo usuÃ¡rio',
	'user_location' => 'EndereÃ§o',
	'user_interests' => 'Interesse',
	'user_occupation' => 'OcupaÃ§Ã£o',
	'latest_upload' => 'Envios Recentes', //cpg1.3.0
	'never' => 'nunca', //cpg1.3.0
);

// ------------------------------------------------------------------------- 
//
// File util.php
// ------------------------------------------------------------------------- 
//

if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'Utilitarios para o Admin (Redimensionar)', //cpg1.3.0
  'what_it_does' => 'O que este utilitario pode fazer:',
  'what_update_titles' => 'Atualizar titulos do arquivo',
  'what_delete_title' => 'Deletar titulos',
  'what_rebuild' => 'Refazer miniaturas e redimensionar fotos',
  'what_delete_originals' => 'Substituir foto por uma redimensionada',
  'file' => 'Arquivo',
  'title_set_to' => 'titulo setado para',
  'submit_form' => 'enviar',
  'updated_succesfully' => 'atualizado com sucesso',
  'error_create' => 'ERRO criando',
  'continue' => 'Processar mais imagens',
  'main_success' => 'O arquivo %s foi como arquivo principal', //cpg1.3.0
  'error_rename' => 'Erro renomeando %s para %s',
  'error_not_found' => 'O arquivo %s nÃ£o foi encontrado',
  'back' => 'voltar para pÃ¡gina principal',
  'thumbs_wait' => 'Atualizando miniaturas e/ou imagens redimensionadas, por 
favor aguarde...',
  'thumbs_continue_wait' => 'Continuando a atualizar miniaturas e/ou imagens 
redimensionadas...',
  'titles_wait' => 'Atualizando titulos, por favor aguarde...',
  'delete_wait' => 'Deletando titulos, por favor aguarde...',
  'replace_wait' => 'Deletando originais e repondo-as com as imagens 
redimensionadas, por favor aguarde..',
  'instruction' => 'InstruÃ§Ãµes rÃ¡pidas',
  'instruction_action' => 'Selecione a aÃ§Ã£o',
  'instruction_parameter' => 'Ajuste os parÃ¢mentos',
  'instruction_album' => 'Selecione o Album',
  'instruction_press' => 'Pressione %s',
  'update' => 'Atualizar miniaturas e/ou redimensionar fotos',
  'update_what' => 'O que deve ser atualizado',
  'update_thumb' => 'Apenas miniaturas',
  'update_pic' => 'Apenas imagens redimensionadas',
  'update_both' => 'Miniaturas e Imagens redimensionadas',
  'update_number' => 'NÃºmero de imagens processadas por clique',
  'update_option' => '(Tente um numero menor caso vocÃª esteja tendo 
problemas com timeout)',
  'filename_title' => 'Arquivo &rArr; Titulo do arquivo', //cpg1.3.0
  'filename_how' => 'Como o arquivo deve ser modificado',
  'filename_remove' => 'Remover o .jpg no final e colocar _ (underline) com 
espaÃ§os',
  'filename_euro' => 'Alterar 2003_11_23_13_20_20.jpg para 23/11/2003 
13:20',
  'filename_us' => 'Alterar 2003_11_23_13_20_20.jpg para 11/23/2003 13:20',
  'filename_time' => 'Alterar 2003_11_23_13_20_20.jpg para 13:20',
  'delete' => 'Deletar titulo de arquivos ou tamanhos originais de fotos', 
//cpg1.3.0
  'delete_title' => 'Deletar titulo de arquivos', //cpg1.3.0
  'delete_original' => 'Deletar tamanho original de fotos',
  'delete_replace' => 'Deleta as imagens originais repondo-as com a versÃ£o 
redimensionada',
  'select_album' => 'Selecione o album',
  'delete_orphans' => 'Deletar comentÃ¡rios orphaned (funciona em todos os 
albums)', //cpg1.3.0
  'orphan_comment' => 'ComentÃ¡rio orphan encontrados', //cpg1.3.0
  'delete' => 'Deletar', //cpg1.3.0
  'delete_all' => 'Deletar todos', //cpg1.3.0
  'comment' => 'ComentÃ¡rio: ', //cpg1.3.0
  'nonexist' => 'atachado em um arquivo que nÃ£o existe # ', //cpg1.3.0
  'phpinfo' => 'Mostrar phpinfo', //cpg1.3.0
  'update_db' => 'Atualizar banco de dados', //cpg1.3.0
  'update_db_explanation' => 'Se vocÃª substituiu arquivos da galeria, 
adicionou uma modificaÃ§Ã£o ou atualizou de uma versÃ£o anterior da galeria, 
tenha certeza de ter rodado a atualizaÃ§Ã£o de banco de dados uma vez. Isto 
irÃ¡ criar as tabelas necessÃ¡rias e/ou valores de configuraÃ§Ã£o no seu banco 
de dados.', //cpg1.3.0
);

?>

