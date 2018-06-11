###################
Resumo
###################

Para que seja montada uma grade horária de uma universidade, deve-se levar em consideração alguns pontos e informações importantes. Com o uso da tecnologia da informação é possível idealizar e criar uma ferramenta que dê suporte, e facilite o processo de criação desta grade horária. Baseado nesta ideia, o uso de um Sistema Gerador de Grade Horária Universitária, permite fornecer as informações requeridas com brevidade. Estudando tecnologias web atuais, é totalmente exequível elaborar um instrumento automatizado de auxílio em tal processo.

*******************
Introdução
*******************

Uma das maiores dificuldades das instituições de ensino superior, no início de todo semestre letivo é a montagem na grade de horários de cada curso. Este tipo de tarefa, se torna um afazer complicado devido à complexidade em cruzar informações que devem ser respeitadas durante este processo, tais como: disponibilidades de horários dos docentes ou demanda de turmas à serem atendidas pelos mesmos.
	“Há uma infinidade de variações da geração de horários. Isto se deve ao fato de que em países, regiões de um país e instituições de ensino de uma mesma região adotam critérios educacionais diferenciados entre si. Devido a esta característica, se torna um problema de difícil generalização. ”,([1] SOUSA, MORRETI, PODESTÁ, 2008) e pensando nisto, o SGGHU tem como intuito facilitar a montagem de grade horária das instituições de ensino superior, buscando redução de tempo e esforços desnecessários na montagem dos horários manualmente. Como exposto por Petrovic e Burke ([2] 2002), um grande número de eventos a serem pensados e uma ampla variedade de restrições impostas ao agendamento de horários, torna o conjunto de todas as soluções possíveis (ou seja, o espaço de busca do problema), algo extremamente vasto. A construção do algoritmo do SGGHU pensa em reduzir todo o transtorno na montagem do cronograma, ao mínimo possível.


**************************
Justificativa
**************************

Segundo Burke e Petrovic ([2] 2002), a construção de um cronograma atrai atenções de comunidades científicas de várias disciplinas, e vem sendo sempre constatado que é uma tarefa árdua e que exige demanda de tempo e informações. Foi notado também, que não existem sistemas de informação voltados a universidades para o auxílio da formação da grade de horário. Para preencher essa lacuna, o SGGHU será implementado, visando a total otimização nesse processo, diminuindo o trabalho mecânico a quase zero, reduzindo a margem de erro no processo de cruzamento das informações e poupando tempo, que pode ser reutilizado em outras atividades acerca da elaboração de mais um semestre letivo. O surgimento contínuo de restrições, demandam o objetivo de garantir que nenhum conflito venha a surgir dentro do cronograma que será criado ([3] Daskalaki, 2005), e como com o trabalho manual estes erros tendem cada vez mais à crescerem, se faz necessário a intervenção de um algoritmo que maximize a integridade daquela construção, sendo indispensável atingir o equilíbrio da carga horária entre os docentes e a condensação dos horários de cada professor ([4] ARAUJO, SECCHIN, 2012), auxiliando na rapidez do processo, e gerando um resultado final positivo, sempre acima do esperado. 

*******************
Metodologia
*******************

A análise de requisitos será elaborada através de Wireframes e rascunhos, auxiliando na validação de regras de negócio de maneira mais eficaz. Serão descritos os principais grupos de conteúdo presentes na aplicação, a estrutura da informação, e uma descrição e visualização básica da interface e da interação com o usuário. Será seguido o processo de prototipação, para que se possa propor melhorias, minimizar riscos e tempo, ao mesmo tempo que se facilita o entendimento dos requisitos, expondo conceitos e funcionalidades. Desta forma, será possível manter um maior alinhamento entre equipe e o que está sendo proposto. O tamanho da prototipação, se assemelhará ao resultado que será entregue. 
A implementação será feita utilizando a linguagem de programação atuante do lado do servidor, PHP, na sua versão 7.2.2, que tem como objetivo permitir que sejam escritas de forma rápida, páginas dinâmicas. Seu framework Codeigniter, na versão 3.1.8, nos possibilitará estruturar a aplicação na abordagem MVC, permitindo forte separação entre a lógica e a apresentação da mesma. Salienta-se que este framework ajudará na facilitação da implementação de tarefas comuns, alocando um tempo maior, para regras de negócios mais complexas. Para que a aplicação venha a ser responsiva aos diversos dispositivos, será empregado o framework Bootstrap, que reduzirá linhas de código CSS, HTML e JavaScript, com suas inúmeras bibliotecas, que se tornam prontas apenas para incluir no projeto. O Boostrap nos dá a possibilidade de manter um padrão visual, e facilidade em manutenções futuras.
O sistema de gerenciamento de banco de dados será o MySQL, versão 6.3.10. Além de ser Open-Source, este SGBD é altamente compatível com o PHP, o que torna extremamente fácil, também a sua acessibilidade entre os mais diversos sistemas operacionais. Seu alto desempenho, e escalabilidade ajudarão no crescimento contínuo da aplicação em si.


************
Descrição da Aplicação
************

Previamente, para ter acesso a os totais recursos da aplicação, o usuário deverá realizar o login, inserindo corretamente os dados nos campos Usuário e Senha. Após realizar o login, ele será levado diretamente para a tela de cadastro de Matérias, informando dados como o nome da matéria, o curso, semestre, entre outros. No menu lateral esquerdo, além da opção de Cadastro Matérias, haverá a aba Cadastro de Professores, onde o usuário poderá informar dados referentes à horário de disponibilidade, materiais que podem ser lecionadas, entre outros. Mais abaixo, ainda no menu lateral, existirá a aba de Quadro de Horários, onde o usuário poderá, além de gerar uma nova grade, possibilitará a ele visualizar, editar, compartilhar, imprimir ou excluir as grades já existentes. A opção de sair será a última da aba, possibilitando o usuário de sair completamente do sistema.
Uma vez que os dados foram captados, e armazenados em banco, o sistema desenvolvido em PHP irá cruzar as informações dos horários disponíveis e matérias desejadas, sem mais nenhuma interferência do usuário, de forma automatizada, resultando no fim, em uma sugestão de grade para o período letivo. De posse dessa sugestão, e com a possibilidade de choque de horários, o usuário poderá editar de forma livre, levando em consideração outros tipos de informações, ou manter o que já foi feito pelo SGGHU.


***************
Colaboradores
***************

Douglas Muniz; Marcos Paixão; Cássio Belfort.
