###################
Resumo
###################

Para que seja montada uma grade hor�ria de uma universidade, deve-se levar em considera��o alguns pontos e informa��es importantes. Com o uso da tecnologia da informa��o � poss�vel idealizar e criar uma ferramenta que d� suporte, e facilite o processo de cria��o desta grade hor�ria. Baseado nesta ideia, o uso de um Sistema Gerador de Grade Hor�ria Universit�ria, permite fornecer as informa��es requeridas com brevidade. Estudando tecnologias web atuais, � totalmente exequ�vel elaborar um instrumento automatizado de aux�lio em tal processo.

*******************
Introdu��o
*******************

Uma das maiores dificuldades das institui��es de ensino superior, no in�cio de todo semestre letivo � a montagem na grade de hor�rios de cada curso. Este tipo de tarefa, se torna um afazer complicado devido � complexidade em cruzar informa��es que devem ser respeitadas durante este processo, tais como: disponibilidades de hor�rios dos docentes ou demanda de turmas � serem atendidas pelos mesmos.
	�H� uma infinidade de varia��es da gera��o de hor�rios. Isto se deve ao fato de que em pa�ses, regi�es de um pa�s e institui��es de ensino de uma mesma regi�o adotam crit�rios educacionais diferenciados entre si. Devido a esta caracter�stica, se torna um problema de dif�cil generaliza��o. �,([1] SOUSA, MORRETI, PODEST�, 2008) e pensando nisto, o SGGHU tem como intuito facilitar a montagem de grade hor�ria das institui��es de ensino superior, buscando redu��o de tempo e esfor�os desnecess�rios na montagem dos hor�rios manualmente. Como exposto por Petrovic e Burke ([2] 2002), um grande n�mero de eventos a serem pensados e uma ampla variedade de restri��es impostas ao agendamento de hor�rios, torna o conjunto de todas as solu��es poss�veis (ou seja, o espa�o de busca do problema), algo extremamente vasto. A constru��o do algoritmo do SGGHU pensa em reduzir todo o transtorno na montagem do cronograma, ao m�nimo poss�vel.


**************************
Justificativa
**************************

Segundo Burke e Petrovic ([2] 2002), a constru��o de um cronograma atrai aten��es de comunidades cient�ficas de v�rias disciplinas, e vem sendo sempre constatado que � uma tarefa �rdua e que exige demanda de tempo e informa��es. Foi notado tamb�m, que n�o existem sistemas de informa��o voltados a universidades para o aux�lio da forma��o da grade de hor�rio. Para preencher essa lacuna, o SGGHU ser� implementado, visando a total otimiza��o nesse processo, diminuindo o trabalho mec�nico a quase zero, reduzindo a margem de erro no processo de cruzamento das informa��es e poupando tempo, que pode ser reutilizado em outras atividades acerca da elabora��o de mais um semestre letivo. O surgimento cont�nuo de restri��es, demandam o objetivo de garantir que nenhum conflito venha a surgir dentro do cronograma que ser� criado ([3] Daskalaki, 2005), e como com o trabalho manual estes erros tendem cada vez mais � crescerem, se faz necess�rio a interven��o de um algoritmo que maximize a integridade daquela constru��o, sendo indispens�vel atingir o equil�brio da carga hor�ria entre os docentes e a condensa��o dos hor�rios de cada professor ([4] ARAUJO, SECCHIN, 2012), auxiliando na rapidez do processo, e gerando um resultado final positivo, sempre acima do esperado. 

*******************
Metodologia
*******************

A an�lise de requisitos ser� elaborada atrav�s de Wireframes e rascunhos, auxiliando na valida��o de regras de neg�cio de maneira mais eficaz. Ser�o descritos os principais grupos de conte�do presentes na aplica��o, a estrutura da informa��o, e uma descri��o e visualiza��o b�sica da interface e da intera��o com o usu�rio. Ser� seguido o processo de prototipa��o, para que se possa propor melhorias, minimizar riscos e tempo, ao mesmo tempo que se facilita o entendimento dos requisitos, expondo conceitos e funcionalidades. Desta forma, ser� poss�vel manter um maior alinhamento entre equipe e o que est� sendo proposto. O tamanho da prototipa��o, se assemelhar� ao resultado que ser� entregue. 
A implementa��o ser� feita utilizando a linguagem de programa��o atuante do lado do servidor, PHP, na sua vers�o 7.2.2, que tem como objetivo permitir que sejam escritas de forma r�pida, p�ginas din�micas. Seu framework Codeigniter, na vers�o 3.1.8, nos possibilitar� estruturar a aplica��o na abordagem MVC, permitindo forte separa��o entre a l�gica e a apresenta��o da mesma. Salienta-se que este framework ajudar� na facilita��o da implementa��o de tarefas comuns, alocando um tempo maior, para regras de neg�cios mais complexas. Para que a aplica��o venha a ser responsiva aos diversos dispositivos, ser� empregado o framework Bootstrap, que reduzir� linhas de c�digo CSS, HTML e JavaScript, com suas in�meras bibliotecas, que se tornam prontas apenas para incluir no projeto. O Boostrap nos d� a possibilidade de manter um padr�o visual, e facilidade em manuten��es futuras.
O sistema de gerenciamento de banco de dados ser� o MySQL, vers�o 6.3.10. Al�m de ser Open-Source, este SGBD � altamente compat�vel com o PHP, o que torna extremamente f�cil, tamb�m a sua acessibilidade entre os mais diversos sistemas operacionais. Seu alto desempenho, e escalabilidade ajudar�o no crescimento cont�nuo da aplica��o em si.


************
Descri��o da Aplica��o
************

Previamente, para ter acesso a os totais recursos da aplica��o, o usu�rio dever� realizar o login, inserindo corretamente os dados nos campos Usu�rio e Senha. Ap�s realizar o login, ele ser� levado diretamente para a tela de cadastro de Mat�rias, informando dados como o nome da mat�ria, o curso, semestre, entre outros. No menu lateral esquerdo, al�m da op��o de Cadastro Mat�rias, haver� a aba Cadastro de Professores, onde o usu�rio poder� informar dados referentes � hor�rio de disponibilidade, materiais que podem ser lecionadas, entre outros. Mais abaixo, ainda no menu lateral, existir� a aba de Quadro de Hor�rios, onde o usu�rio poder�, al�m de gerar uma nova grade, possibilitar� a ele visualizar, editar, compartilhar, imprimir ou excluir as grades j� existentes. A op��o de sair ser� a �ltima da aba, possibilitando o usu�rio de sair completamente do sistema.
Uma vez que os dados foram captados, e armazenados em banco, o sistema desenvolvido em PHP ir� cruzar as informa��es dos hor�rios dispon�veis e mat�rias desejadas, sem mais nenhuma interfer�ncia do usu�rio, de forma automatizada, resultando no fim, em uma sugest�o de grade para o per�odo letivo. De posse dessa sugest�o, e com a possibilidade de choque de hor�rios, o usu�rio poder� editar de forma livre, levando em considera��o outros tipos de informa��es, ou manter o que j� foi feito pelo SGGHU.


***************
Colaboradores
***************

Douglas Muniz; Marcos Paix�o; C�ssio Belfort.
