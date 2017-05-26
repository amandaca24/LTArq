<div id="conteudo">
<script src="js/jquery-3.2.1.js"></script>    
<script src="js/dform.js"></script>
   
		<div class="container">
			
			<h2>Peça o seu orçamento</h2>
			<br>
   			<div class="col-sm-6">
   				<form>

   					<div class="form-group">
   						<label for="nome">Nome</label>
   						<input type="text" class="form-control" id="nome">
   					</div>

   					<div class="form-group">
   						<label for="email">E-mail</label>
   						<input type="email" class="form-control" id="email">
   					</div>
					
					<div class="form-group">
   						<label for="telefone">Telefone</label>
   						<input type="number" class="form-control" id="telefone">
   					</div>

   				</form>
			</div>
			<div class="col-sm-6">
				<form action="mais_prod.php" method="post">
				<div id="dynamicDiv" class="form-group">
				<label for="selecione">Selecione o tipo que será digitalizado:</label>
                
                <select class="form-group" id="selecione">
                    <option selected="selected" disabled >Selecione tipo</option>
                    <option value="imgExt">Imagem externa</option> 
                    <option value="imgInt">Imagem interna</option>
                    <option value="imgHum">Planta Humanizada</option>
                    <option value = "video">Video animação</option>
                </select>
				<label for="qtd_prod">Selecione a quantidade de imagens:</label>
                <input type="number" id="qtd_prod" class="form-group" placeholder="Quantidade">
            </br>
                <a class="botao" href="javascript:void(0)" id="addInput">(+) novo item</a>
                
            </div>
            </br>
            <input type="submit" class="btn btn-botao" value="ENVIAR" onclick="return validar()"/>
		
				</form>
		</div>
    </div>

</div>