-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Nov-2020 às 23:39
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mensa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` double NOT NULL,
  `imagem` varchar(500) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `subcategoria` varchar(30) NOT NULL,
  `idade` int(11) NOT NULL,
  `descricao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `imagem`, `categoria`, `subcategoria`, `idade`, `descricao`) VALUES
(25, 'Cerveja Trigo e Mel Colorado Appia 600ml', 17, 'd2f6509eabaf927f9bdfd3f6663c2cc6.png', 'cerveja', 'Artesanal', 0, 'Cerveja de trigo com mel de flor de laranjeira. O resultado é uma refrescante e deliciosa cerveja que agrada todos os paladares, sendo a mais consumida entre as cervejas da Colorado. Muito apreciada pelo público feminino.'),
(26, 'Cerveja Ale Colorado Indica Pale 600ml', 26.99, '4b3d65818882c6a3c0bd2686b4802d20.png', 'cerveja', 'Ale', 0, 'Versão autêntica de uma India Pale ale. Apresenta as já conhecidas notas cítricas, herbais, caramelo e um leve terroso, mas conta com um diferencial que faz dela única e tipicamente brasileira, a adição de rapadura na receita. Ao que pensam se tratar de uma cerveja doce fica ai o engano, o lúpulo inglês confere a ela aquele amargor indispensável para os apreciadores de uma boa Ipa.'),
(27, 'Cerveja Porter Colorado Demoiselle 600ml', 26.99, 'fe0d544544ffa53d59d702f56261fc22.png', 'cerveja', 'Porter', 0, 'Esta Robust Porter paulista é feita com café da região da Alta Mogiana Paulista. Premiada internacionalmente, une o melhor do mundo do café ao melhor do mundo da cerveja.'),
(28, 'Cerveja Leuven Witbier The Witch 600Ml', 34.99, 'd2d1099127b1131aec38795b330e20f3.png', 'cerveja', 'Artesanal', 0, 'Uma cerveja leve e refrescante, de coloração amarelo palha e não filtrada. Feita com maltes de trigo, cevada, casca de laranja e especiarias.'),
(29, 'Cerveja Leuven Golden Ale King 600ml', 34.99, '3dccdea38535d07251176aab57d15cd1.png', 'cerveja', 'Artesanal', 0, '100% malte, de coloração dourado intenso, com sabor suave de malte, aroma delicadamente frutado, refrescante, de amargor sutil, proporcionando alto drinkability. Indicado para qualquer tipo de carne, principalmente churrasco.'),
(30, 'Cerveja Leuven Red Ale 600ml', 34.99, 'eaaa7cc771d1f2f5cf5dc3eefbadd879.png', 'cerveja', 'Rubi', 0, '100% malte, de coloração dourado intenso, com sabor suave de malte, aroma delicadamente frutado, refrescante, de amargor sutil, proporcionando alto drinkability. Indicado para qualquer tipo de carne, principalmente churrasco.'),
(31, 'Roleta Russa IPA Garrafa 355ml', 11.99, '14560deb3119875d6aaaeb52ec203a03.png', 'cerveja', 'Ale', 0, 'Essa é uma cerveja tipo India Pale Ale, mas com o toque de ousadia que a Roleta Russa carrega em seu DNA. Em nossa versão, exageramos na adição dos lúpulos americanos, que proporcionam à cerveja amargor, sabor e aroma. Quando abrimos a garrafa, sentimos aquele tiro de aroma cítrico e frutado, refletindo as características do lúpulo. Ao servir no copo, o entusiasmo aumenta, ao colocar na boca, a sensação é demais! Viva a revolução Cervejeira! Obs: Após tomar uma garrafa de IPA, você começa a enxe'),
(32, 'Cerveja Roleta Russa New England IPA', 14.99, '2b8419b6102e52b4932a1fdd30eee905.png', 'cerveja', 'Roleta Russa', 0, 'Nosso Alquimista Cervejeiro conseguiu surpreender ainda mais! Esta receita traz uma carga extra de lúpulos americanos e australianos, que transmitem sabores incríveis e aromas de frutas tropicais, com grande presença do pêssego. A New England IPA é uma versão mais porrada do estilo New England IPA – o estilo mais querido atualmente – e puxa os limites do estilo com muito mais lúpulo, teor alcoólico, aroma e sabor. Seu visual turvo está relacionado com o fermento em suspensão e o corpo aveludado '),
(33, 'Cerveja Roleta Russa - Imperial Ipa - 500 ml', 29.99, '6c8705d7abaa810841eff4251d6d1144.png', 'cerveja', 'Puro malte', 0, 'A Imperial India Pale Ale da Roleta Russa é uma cerveja para os aficionados por cervejas amargas ao extremo. Nesta cerveja não buscamos equilíbrio de uma tradicional Imperial IPA, buscamos uma cerveja extremamente amarga, que transmita a pegada forte do lúpulo no primeiro gole e que deixe uma sensação amarga de quero mais. O amargor desta cerveja vai além do que o ser humano consegue perceber, chegando aos 120 IBUs. medidos em laboratório. É por isso que chamamos ela de DIABO DO AMARGOR, desenvo'),
(34, 'Espumante Moscatel Casa Perini 750ml', 39.99, '9a13b005e743378c18b7762ba1bbae71.png', 'espumante', 'Perini', 0, 'O espumante Moscatel possui aroma intenso, leve e fino, apresenta uma agradável doçura, equilibrada com a acidez natural das uvas. Possui aroma intenso frutado e floral característico do varietal. Apresenta coloração citrina com reflexos esverdeados e paladar macio e delicado, com equilibrada doçura e frescor.'),
(35, 'Espumante RosÃ© Casa Perini Brut 750ml', 39.99, 'b00a2de06371b948a6ee538610c28626.png', 'espumante', 'Perini', 0, 'Resultado de um assemblage das variedades Moscato Branco, Moscato Giallo e Moscato de Hamburgo, essa que confere uma tonalidade levemente rosada ao espumante. Apresenta perfeito equilibrio entre acidez e açúcar, contendo aroma e sabores que lembram frutas e flores.'),
(36, 'Espumante Brut Casa Perini 750ml', 39.99, '23fee22e8868b676fd64243890297613.png', 'espumante', 'Perini', 0, 'Possui coloração amarelo palha, aromas florais e frutados, ressaltados pela leveza do seu perlage fino, intenso e com espuma cremosa e persistente.'),
(37, 'Espumante Moscatel Aurora 750ml', 26.99, '4d0f0d43f6a521aed4648cb39d04e2da.png', 'espumante', 'Aurora', 0, 'Límpido, com uma coloração amarelo-palha, perlage fino e constante. Aroma com predomínio de frutas cítricas e toques de frutas tropicais. É equilibrado e de ótimo volume de boca. Muito refrescante.'),
(38, 'Espumante Brut Aurora Prosecco 750 ml', 26.99, '20df2ee79558a6418d45822852145352.png', 'espumante', 'Aurora', 0, 'Coloração amarelo clara com reflexos esverdeados. Fresco e frutado, perlage muito bom. Em boca, é fresco, muito leve e de acidez equilibrada.'),
(39, 'Espumante Moscatel RosÃ© Aurora 750ml', 26.99, 'c4cd5b9ff80c8c557d5fc6e96cd3276f.png', 'espumante', 'Aurora', 0, 'Coloração rosada, perlage fino e persistente. Apresenta boa intensidade de aroma, ataque cítrico inicial, com notas florais e de frutas tropicais como melão, combinadas com aquelas provenientes do contato com as leveduras, como pão fresco. Equilibrado com sabor persistente, acidez vibrante que o mantém fresco até o último momento, evidenciando um retrogosto de frutas vermelhas.'),
(40, 'Champanhe Brut Taittinger Reserve 750ml', 359.99, '2d9da586bda7fbf01ab33a5cd8c4fdbe.png', 'espumante', 'Taittinger ', 3, 'Em 1932 Pierre Taittinger comprou o Chateau de la Marquetterie (Reims, Champagne, França) propriedade com extrema importância na produção de vinhos. O Chateau, com adegas de 18 metros de profundidade, foi construído em 1734 por Jacques Fourneaux, que trabalhou de perto com monges Beneditinos, na época donos dos melhores vinhedos da região. Coloração amarelo dourado e brilhante. Aberto e expressivo. Notas de brioche, pêssego, damasco, flores brancas, baunilha e um delicado toque de mel. Frutas cí'),
(41, 'Champanhe RosÃ© Taittinger Prestige 750ml', 579.99, '7c211ec6d6786e8341a9574caf346027.png', 'espumante', 'Taittinger ', 0, 'Desde 1932 o Champagne Taittinger tem crescido e conquistado seu lugar entre as melhores casas de champagne, mostrando com audácia um estilo de vinho particular, muito influenciado pela uva chardonnay. Atualmente a Taittinger está sediada na Abadia de Saint Nicaise (Reims). Coloração rosa intenso e brilhante. Aromas com notas de frutas vermelhas frescas, como framboesa, cereja e groselha. Paladar cremoso, intenso, frutado e fresco.'),
(42, 'Champanhe Brut Taittinger 375ml', 199.99, '92a5237ff522b5594076fc5eb3774328.png', 'espumante', 'Taittinger ', 0, 'Em 1932 Pierre Taittinger comprou o Chateau de la Marquetterie (Reims, Champagne, França) propriedade com extrema importância na produção de vinhos. O Chateau, com adegas de 18 metros de profundidade, foi construído em 1734 por Jacques Fourneaux, que trabalhou de perto com monges Beneditinos, na época donos dos melhores vinhedos da região. Coloração amarelo dourado e brilhante. Aberto e expressivo. Notas de brioche, pêssego, damasco, flores brancas, baunilha e um delicado toque de mel. Frutas cí'),
(43, 'Vinho Tinto Yagan Carmenere 750ml', 26.99, 'fdb5973918f756b825d80c32dea98765.png', 'vinho', 'Tinto', 0, 'Produzido exclusivamente a partir de uvas Carménère, com breve passagem por madeira. Apresenta perfil de fruta escura bem madura, empireumático (defumado) e sutil nota de menta, que se confirmam no palato. Agradável, com ótimo equilíbrio entre a acidez e o álcool, taninos intensos e final médio.'),
(44, 'Vinho Branco Yagan Sauvignon Blanc 750ml', 26.99, '07a0e930852a392c2a753279fa4bf5fe.png', 'vinho', 'Branco', 0, 'Branco elaborado a partir de Chardonnay, com breve passagem por madeira. Frutado e fácil de beber, mostra frutas tropicais maduras acompanhadas de notas florais, tostadas, de ervas e de especiarias doces. Tem acidez refrescante e boa textura, que trazem certo equilíbrio ao conjunto.'),
(45, 'Vinho RosÃ© Yagan Rose 750ml', 26.99, '686a970f233e5cb21453a6a234b05986.png', 'vinho', 'RosÃ©', 0, 'O Vinho Yagan Rosé possui uma cor rosada e aromas com toque de pêssegos. É um vinho leve, refrescante e seco, ideal para o dia a dia.\r\n'),
(46, 'Vinho Tinto Copperland Red Blend 750ml', 57.99, 'f8a87b9c122d83fb3106a50fa7214e15.png', 'vinho', 'Tinto', 0, 'O rótulo não indica a safra, o que provavelmente significa que foram\r\nusados vinhos de anos diferentes. Também não indica as castas, mas deu\r\npara “descobrir” que se trata de um corte de Cabernet Sauvignon (80%),\r\ncomplementado, em partes iguais, por Malbec e Carménère. É um tinto\r\nredondo, fácil de beber e de gostar, que certamente vai agradar o\r\nconsumidor brasileiro, com seus aromas de cereja, chocolate e leve tostado. Na boca, mostra boa acidez, corpo médio, taninos sem arestas e final levem'),
(47, 'Vinho RosÃ© Copperland Cinsault Rose 750ml', 57.99, '2d7abfed3ec4d27a0ae5f4e990a982b9.png', 'vinho', 'RosÃ©', 0, 'Rosé elaborado com a casta Cinsault, apresenta cor salmão de intensidade média. No nariz, frutas vermelhas frescas (framboesa e cereja) e notas florais. Agradável e fácil de beber, tem acidez refrescante, levemente doce e equilibrado.'),
(48, 'Vinho Branco Copperland Pinot Grigio 750ml', 57.99, '4d9118767745b15154728b1d60c8f973.png', 'vinho', 'Branco', 0, 'Chama a atenção pelo rótulo estiloso, numa linha retrô, e pela utilização de\r\ncasta pouco comum no Chile. Na taça, é um vinho simples, mas correto,\r\ncom boa presença de fruta branca e leve floral nos aromas. Na boca, se\r\ndestaca pela boa acidez que faz contraponto adequado à fruta madura,\r\nevitando que se torne enjoativo, num conjunto de corpo médio. O discreto\r\namargor final não atrapalha. Pela acidez e pelo preço, é boa opção para ser\r\nvendido em taça em restaurantes, ou para quem prefere vinh'),
(49, 'Whisky Johnnie Walker Gold Label 750ml', 229.99, '5364a1fc924380129af8a15b8d30fcc7.png', 'destilado', 'whisky', 15, 'Johnnie Walker Gold Label Reserve é obra do master blender nº 1 da JW, Jim Beveridge, que usou whiskys de sua reserva pessoal e barris estocados em Clynelish, região da Escócia onde foi descoberto o ouro, razão pela qual o rótulo é dourado. O diferencial deste blend é a harmonia entre as frutas doces e o mel. O whisky traz equilíbrio entre o sabor de frutas doces e as notas profundas de mel. Ondas de madeira e toques defumados também fazem parte da novidade, que pode ser apreciada em um copo alt'),
(50, 'Whisky Jack DanielÂ´s 1L', 154.99, '5fee246d1b101403c4aa26641dca164a.png', 'destilado', 'whisky', 8, 'Os whiskeys da família Jack Daniel`s diferenciam-se pelo cuidadoso processo de elaboração. O envelhecimento em barris de carvalho novo, aliado ao clima muito especial do Tennessee, lhe confere um sabor suave e marcante. Permanecendo fiel a esta receita, as pessoas podem desfrutar do mesmo whiskey que ganhou sete medalhas de ouro internacionais, quando em 1904 foi homenageado como sendo \"o melhor whiskey do mundo\".'),
(51, 'Whisky Chivas Regal 12 Anos 1L', 149.99, 'a5aec494d36bdb8c0fd7636d3f9cb3bb.png', 'destilado', 'whisky', 12, 'Viver ao máximo e curtir o prazer de uma boa companhia é o estilo de vida Chivas! Com 200 anos de tradição, Chivas Brothers foram pioneiros na arte de misturar os melhores whiskies de malte e de grão em Speyside, no coração da Escócia. Chivas Regal está presente em mais de 150 países, com mais de 3 milhões de caixas vendidas por ano no mundo.'),
(52, 'Vodka Superior Smirnoff Red 1L', 35.99, 'a67243f435139a36576a519b0c3d70c8.png', 'destilado', 'vodka', 0, 'A famosa e popular Vodka Smirnoff Red é composta de álcool proveniente de cereais é tri destilada e dez vezes filtrada.'),
(53, 'Vodka Premium Absolut Natural 1L', 109.99, '611ecb18c7ec18fe360b88dbafbe7646.png', 'destilado', 'vodka', 0, 'Os principais ingredientes da Vodka Absolut Natural são água e um trigo especial, encontrado apenas no hemisfério norte. A água é proveniente de uma fonte profunda e protegida de impurezas, localizada em Åhus. O trigo especial é cultivado com um sistema diferenciado ele é semeado no outono e colhido no outono seguinte. Durante esse período, ele cresce sob a neve da Suécia, desenvolvendo um grão duro. Além disso, o uso de fertilizantes é mínimo.'),
(54, 'Vodka Superior Skyy 1L', 38.5, '0f8f9ca8b621a31f693965d507ff4f95.png', 'destilado', 'vodka', 0, 'Skyy Vodka nasceu da combinação entre prazer e trabalho, na década de 1990. Seu criador, Maurice Kanbar, que tinha forte ligação com o cinema e Hollywood, era um apreciador de vodka e desenvolveu um processo inovador de filtração e destilação em busca de uma vodka com o mais alto grau de pureza.'),
(55, 'Tequila Jose Cuervo Especial 750ml', 99.99, 'cfab7ce921466a886957be76c2baa140.png', 'destilado', 'tequila', 0, 'A tequila nasceu do encontro do processo de destilação introduzido pelos espanhóis na época colonial, somado a uma planta muito antiga das terras mexicanas: o Agave Azul. A Tequila José Cuervo Especial tem uma cor dourada e clara, é o resultado da mistura entre as Tequilas Blanco e Reposada, envelhecida por no minimo 6 meses em barris de carvalho. É a mais popular e responsável por grande parte do consumo mundial.'),
(56, 'Gin Bombay Sapphire 750ml', 109, 'a4760365bee4d98f2ba0f5e0c8c6c315.png', 'destilado', 'Gim', 0, 'Bebida inglesa composta de destilado alcoólico retificado e extratos vegetais aromáticos. O incomparável sabor de \"Bombay Sapphire\" é resultado de uma cuidadosa seleção de ervas aromáticas e um exclusivo processo de destilação, proporcionando um aroma único e agradável.'),
(57, 'Conhaque Brandy Casa Valduga 10 Anos 750ml', 179.99, '7871b05415026e0b6767058450189860.png', 'destilado', 'conhaque', 10, 'O Brandy X anos Casa Valduga destaca-se por sua maciez e sutileza. Foi elaborado a partir de uma seleção de uvas Trebbiano dos vinhedos da família. Após a elaboração do vinho base branco, foi realizada a primeira destilação em alambique descontínuo de cobre, através da destilação lenta durante 10 horas. Utilizando-se o primeiro destilado, realizou-se a segunda destilação, também lenta, onde é separado, cabeça, coração e cauda do líquido. Durante 10 anos, o coração - parte mais nobre da destilaçã'),
(58, 'Vinho Tinto Sutter Home Zinfandel 750ml', 47.99, '03f0749db32db64165e670f05ae6ba70.png', 'vinho', 'Tinto', 0, 'A família Trinchero adquiriu a vinícola Sutter Home, na Califórnia, em 1948, e investiu toda sua paixão, visão e conhecimento sobre os gostos dos consumidores no novo projeto, mudando o jeito dos norte-americanos apreciarem vinhos através de seus varietais de excelente qualidade e preço acessível. Hoje, levando adiante um projeto para levantar fundos voltados à pesquisa e conscientização a respeito do câncer de mama, a empresa familiar continua a evoluir, recebendo diversos prêmios e oferecendo '),
(59, 'Vinho RosÃ© Sutter Home White Zinfandel 750ml', 47.99, '00a5ae492bf6bf842d546cb00a6f3cf5.png', 'vinho', 'RosÃ©', 0, 'Com os aromas enriquecidos e os taninos arredondados pelo estágio em barricas, esse Zinfandel é tudo o que você precisa para brindar deliciosamente nos momentos descontraídos. Aromas frescos de frutas vermelhas. Na boca é cremoso com sabores de morango e melão, ótima acidez e final refrescante Harmoniza perfeitamente com frutos do mar, peixes e comida japonesa'),
(60, 'Vinho Branco Sutter Home Chardonnay 750ml', 47.99, 'f6d9866cee39a74b16a37b7f2addb476.png', 'vinho', 'Branco', 0, 'Vinho branco americano de coloração amarelo-palha claro. Aromas frescos de pêra madura e cítricos que levam ao pêssego cremoso e sabores maçã suculenta envolto em uma textura suave e sedosa. Paladar com impressionante gama de sabores, deixando uma impressão duradoura na boca. Tons suaves, ricos e cremosos combinam com sabores de frutas frescas para um sabor longo e luxuoso.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `userscli`
--

CREATE TABLE `userscli` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `num_card` varchar(50) NOT NULL,
  `cvv` int(11) NOT NULL,
  `data_venc` varchar(20) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `numero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `userscli`
--

INSERT INTO `userscli` (`id`, `login`, `senha`, `nome`, `num_card`, `cvv`, `data_venc`, `endereco`, `numero`) VALUES
(1, 'tychfh', 'dbhhd', 'fhhgh', '3533 1133 3533 3533', 654, '54/44/4444', 'dhhhggh', 'hghhdt'),
(2, 'fjsdfkjsdfhkj', 'hjcgcggc', 'gyyufyu', '5465 4654 6546 5454', 454, '45/46/5465', 'gihjvhjcgj', '555'),
(3, 'frodÃ£o', 'neggay', 'frodÃ£o da silva sauro', '2122 2222 2222 2222', 654, '14/11/2019', 'jundiai', '54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usersvend`
--

CREATE TABLE `usersvend` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `nome_corp` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `email_sac` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usersvend`
--

INSERT INTO `usersvend` (`id`, `login`, `senha`, `email_admin`, `nome_corp`, `imagem`, `email_sac`) VALUES
(17, 'frodrigueira', 'neggay', 'frodrigueiravinhos@mensa.com.br', 'Frodrigueira vinÃ­cola', 'b19729cee4c0179b1295a2e01f4c80ec.png', 'frodrigueiraSAC@contato.com'),
(18, 'vygh', 'hbjjbk', 'kjhbhbhbhb', 'jbkhjhb', '8f4b130601f2979e4bbbb669b9854775', 'hjbhbjhjbhbj');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vend_prod`
--

CREATE TABLE `vend_prod` (
  `id` int(11) NOT NULL,
  `id_vend` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vend_prod`
--

INSERT INTO `vend_prod` (`id`, `id_vend`, `id_prod`) VALUES
(6, 17, 25),
(7, 17, 26),
(8, 17, 27),
(9, 17, 28),
(10, 17, 29),
(11, 17, 30),
(12, 17, 31),
(13, 17, 32),
(14, 17, 33),
(15, 17, 34),
(16, 17, 35),
(17, 17, 36),
(18, 17, 37),
(19, 17, 38),
(20, 17, 39),
(21, 17, 40),
(22, 17, 41),
(23, 17, 42),
(24, 17, 43),
(25, 17, 44),
(26, 17, 45),
(27, 17, 46),
(28, 17, 47),
(29, 17, 48),
(30, 17, 49),
(31, 17, 50),
(32, 17, 51),
(33, 17, 52),
(34, 17, 53),
(35, 17, 54),
(36, 17, 55),
(37, 17, 56),
(38, 17, 57),
(39, 17, 58),
(40, 17, 59),
(41, 17, 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userscli`
--
ALTER TABLE `userscli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersvend`
--
ALTER TABLE `usersvend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vend_prod`
--
ALTER TABLE `vend_prod`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_prod` (`id_prod`),
  ADD KEY `fk_id_vend` (`id_vend`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `userscli`
--
ALTER TABLE `userscli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usersvend`
--
ALTER TABLE `usersvend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vend_prod`
--
ALTER TABLE `vend_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `vend_prod`
--
ALTER TABLE `vend_prod`
  ADD CONSTRAINT `fk_id_prod` FOREIGN KEY (`id_prod`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_vend` FOREIGN KEY (`id_vend`) REFERENCES `usersvend` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
