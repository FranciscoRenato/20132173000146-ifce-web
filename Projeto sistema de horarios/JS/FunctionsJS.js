//Arquivo JS para funções de JQuery e JavaScript

//++++++++++++++++++++++++++++++++++++++++ Função Excluir da tabela +++++++++++++++++++++++++++++++++++
(function($){

	excluir = function(item){
		var tr = $(item).closest('tr');

		tr.fadeOut('400', function() {
			tr.excluir();
		});
		return false;
	}

})(jQuery);

//++++++++++++++++++++++++++++++++++++++++ Fim da Excluir da tabela +++++++++++++++++++++++++++++++++++