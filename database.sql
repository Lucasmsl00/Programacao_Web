-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/10/2024 às 23:25
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `infosposts`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `mensagem` varchar(255) NOT NULL,
  `data_mensagem` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `sobrenome`, `email`, `telefone`, `mensagem`, `data_mensagem`) VALUES
(1, 'Lucas', 'Lima', 'lucas@gmail.com', '81985770506', 'Testando mensagem de contato', '2024-09-27');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imc`
--

CREATE TABLE `imc` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `peso` int(11) NOT NULL,
  `altura` float NOT NULL,
  `imc` float NOT NULL,
  `classificacao` varchar(255) NOT NULL,
  `data_inclusao` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `imc`
--

INSERT INTO `imc` (`id`, `nome`, `email`, `peso`, `altura`, `imc`, `classificacao`, `data_inclusao`) VALUES
(31, 'Luan', 'lucas@gmail.com', 100, 1.8, 30.86, 'Obesidade I', '2024-10-01'),
(32, 'Luan', 'lucas@gmail.com', 70, 1.8, 21.6, 'Peso Ideal', '2024-10-22'),
(33, 'Luan', 'luan@gmail.com', 80, 1.8, 24.69, 'Peso Ideal', '2024-10-22'),
(34, 'Luan', 'luan@gmail.com', 80, 1.8, 24.69, 'Peso Ideal', '2024-10-22'),
(35, 'Luan', 'luan@gmail.com', 80, 1.8, 24.69, 'Peso Ideal', '2024-10-22'),
(36, 'Luan', 'luan@gmail.com', 80, 1.8, 24.69, 'Peso Ideal', '2024-10-22'),
(37, 'Luan', 'luan@gmail.com', 80, 1.8, 24.69, 'Peso Ideal', '2024-10-22');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricaoCurta` varchar(255) NOT NULL,
  `descricao` longtext NOT NULL,
  `caminhoImg` varchar(255) NOT NULL,
  `caminhoArquivo` varchar(255) NOT NULL,
  `dataRegistro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descricaoCurta`, `descricao`, `caminhoImg`, `caminhoArquivo`, `dataRegistro`) VALUES
(1, 'BOXE', 'Descubra a força interior e a técnica impecável necessárias para se destacar no ringue. Desafie-se a superar seus limites físicos e mentais enquanto aprende os segredos deste esporte de combate emocionante.', 'O boxe é um esporte de combate que envolve o uso dos punhos para atacar e se defender. Tem origens antigas, remontando a civilizações como os sumérios e egípcios, mas sua forma moderna se desenvolveu no século XVIII na Inglaterra. O esporte se popularizou ao redor do mundo e é caracterizado pela sua combinação de técnica, força física, estratégia e condicionamento.\n\nOs competidores, chamados de pugilistas ou boxeadores, enfrentam-se em um ringue dividido em quadrados e delimitado por cordas. As lutas são divididas em rounds, com duração específica, e são supervisionadas por um árbitro. O objetivo é acertar o oponente com golpes limpos e válidos, enquanto se esquiva e se defende dos ataques recebidos.\n\nO boxe moderno é categorizado em diversas classes de peso, desde pesos mosca até pesos pesados, o que permite a participação de atletas de diferentes estaturas e pesos. Existem organizações internacionais que regulamentam o esporte e promovem campeonatos de prestígio, como a Associação Mundial de Boxe (WBA), o Conselho Mundial de Boxe (WBC) e a Federação Internacional de Boxe (IBF).\n\nAlém da competição profissional, o boxe também é praticado como forma de exercício físico, defesa pessoal e disciplina mental. Muitas academias e clubes oferecem aulas para iniciantes, visando não apenas o condicionamento físico, mas também o desenvolvimento da autoconfiança e disciplina.\n\nApesar de sua popularidade, o boxe também é um esporte controverso devido aos riscos associados às lesões cerebrais traumáticas decorrentes dos golpes na cabeça. Essa preocupação levou a diversas medidas de segurança e regulamentações para proteger a saúde dos atletas, como exames médicos rigorosos e regras específicas sobre golpes permitidos.\n\nEm resumo, o boxe é um esporte emocionante e desafiador que exige habilidade técnica, condicionamento físico e coragem dos seus praticantes. Ao longo dos anos, tem sido uma fonte de inspiração para muitos e continua a ser um dos esportes mais assistidos e praticados em todo o mundo.', 'imagens/boxe.jpg', 'includes/boxe.php', '2024-10-01 12:46:03'),
(2, 'CROSSFIT', 'Entre na arena do crossfit e desafie seu corpo em um terinamento intenso e variado que irá transformar sua força, resistência e condicionamento fisíco. Supere seus limites e alcance novos patamares de desempenho.', 'O CrossFit é uma modalidade de treinamento físico que se destaca pela sua abordagem variada e intensa, visando o desenvolvimento completo do condicionamento físico. Criado na década de 2000 pelo treinador Greg Glassman, o CrossFit combina elementos de levantamento de peso olímpico, ginástica e treinamento de alta intensidade em um programa de exercícios desafiador e dinâmico. Os treinos de CrossFit são conhecidos por sua diversidade, envolvendo uma ampla gama de exercícios funcionais realizados em alta intensidade e com períodos de descanso limitados. Os participantes podem esperar realizar exercícios como levantamento de peso, flexões, saltos, corridas, remadas, treinos com cordas e muitos outros movimentos variados. Uma das características distintivas do CrossFit é a ênfase na competição saudável e na superação pessoal. Os treinos são frequentemente cronometrados ou realizados por número de repetições, incentivando os participantes a desafiarem constantemente seus limites e a progredirem em sua forma física. O CrossFit é frequentemente praticado em academias especializadas, conhecidas como \"boxes\", onde os treinadores certificados oferecem orientação personalizada e motivam os participantes a alcançarem seus objetivos de condicionamento físico. Além disso, a comunidade CrossFit é conhecida por sua atmosfera de apoio e camaradagem, incentivando os membros a se apoiarem mutuamente em sua jornada de fitness. Os benefícios do CrossFit incluem melhoria da força, resistência, condicionamento cardiovascular, flexibilidade e agilidade. É uma abordagem eficaz para quem busca um programa de treinamento abrangente e desafiador, adaptável a pessoas de todos os níveis de condicionamento físico e habilidade atlética. No entanto, é importante praticar o CrossFit com cautela e seguir as orientações de segurança, especialmente ao realizar movimentos complexos ou de alta intensidade. Com uma abordagem equilibrada e focada na técnica adequada, o CrossFit pode ser uma forma gratificante e eficaz de atingir os objetivos de condicionamento físico e melhorar a saúde geral.', 'imagens/crossfit.jpg', 'includes/crossfit.php', '2024-10-01 13:01:34'),
(3, 'ESPORTES NA NEVE', 'Sinta adrenalina das montanhas cobertas de neve enquanto desliza pelas encostas em esportes como esqui e snowboard. Prepare-se para a emoção de voar sobre neve e dominar as pistas.', 'Os esportes na neve incluem uma variedade de atividades praticadas em ambientes gelados, como montanhas cobertas de neve. Estas atividades são populares em regiões com invernos rigorosos e oferecem uma mistura única de desafio físico, beleza natural e diversão ao ar livre. Alguns dos esportes mais populares praticados na neve incluem: Esqui alpino: Descer encostas cobertas de neve em esquis é uma prática que combina velocidade, habilidade e controle. Os praticantes podem se aventurar em pistas variadas, desde iniciantes até avançadas, desfrutando da adrenalina e da sensação de liberdade que o esqui proporciona. Snowboard: Similar ao esqui, o snowboard envolve deslizar sobre a neve, mas em uma prancha única, oferecendo uma experiência diferente e desafiadora. Os praticantes podem realizar manobras e saltos em half-pipes ou explorar a paisagem natural em pistas designadas. Esqui cross-country: Também conhecido como esqui nórdico, o esqui cross-country é uma forma de movimentação em terreno plano ou levemente inclinado. Os praticantes utilizam esquis mais estreitos e alongados, impulsionando-se com os bastões, e podem explorar vastas paisagens cobertas de neve. Patinação no gelo: Praticada em pistas de gelo, a patinação no gelo é uma atividade elegante e desafiadora que requer equilíbrio, coordenação e controle. Os praticantes podem realizar movimentos graciosos e acrobáticos, seja em uma pista indoor ou em lagos congelados. Biatlo: Esta é uma combinação de esqui cross-country e tiro ao alvo, onde os atletas competem em provas de velocidade na neve, intercaladas com sessões de tiro de precisão. O biatlo exige resistência física, habilidades de tiro e estratégia de corrida. Luge, bobsled e skeleton: Estes são esportes de velocidade praticados em pistas especialmente construídas, onde os competidores deslizam em trenós a alta velocidade. O luge é praticado deitado de costas, o bobsled é praticado em equipes de dois ou quatro atletas, e o skeleton é praticado deitado de bruços. Estes esportes na neve proporcionam uma experiência emocionante e desafiadora para praticantes de todos os níveis de habilidade, enquanto aproveitam a beleza e a serenidade dos ambientes cobertos de neve.', 'imagens/esporte_neve.jpg', 'includes/esporte_neve.php', '2024-10-01 13:03:41'),
(4, 'BASQUETE', 'Dibre, passe, arremesse! Junte-se ao emocionante mundo do basquete e experimente a empolgação de jogar em equipe, competir em partidas acirradas e fazer cestas incríveis.', 'O basquete é um esporte de equipe dinâmico e emocionante, jogado entre duas equipes de cinco jogadores cada, que buscam marcar pontos arremessando uma bola em uma cesta localizada no final de uma quadra. Originário dos Estados Unidos no final do século XIX, o basquete rapidamente se tornou um dos esportes mais populares do mundo. O objetivo do jogo é marcar pontos arremessando a bola através da cesta do adversário, enquanto se defende contra os ataques da equipe oponente. Os jogadores podem avançar pela quadra driblando a bola ou passando-a entre os companheiros de equipe. Estratégia, habilidade, agilidade e trabalho em equipe são fundamentais para o sucesso no basquete. As partidas são divididas em quartos (ou períodos), com duração determinada, e a equipe com mais pontos ao final do jogo é declarada vencedora. Durante o jogo, os jogadores competem por rebotes, roubos de bola e bloqueios, enquanto tentam superar a defesa adversária para marcar pontos. O basquete é conhecido por sua atmosfera vibrante e competitiva, tanto em níveis amadores quanto profissionais. Ligas profissionais, como a NBA (National Basketball Association) nos Estados Unidos, atraem milhões de fãs em todo o mundo e apresentam alguns dos melhores talentos do esporte. Além de ser um esporte emocionante de assistir e jogar, o basquete oferece uma série de benefícios para a saúde, incluindo melhoria da aptidão cardiovascular, desenvolvimento da coordenação e agilidade, e fortalecimento muscular. É também uma ótima maneira de construir amizades, desenvolver habilidades sociais e aprender lições valiosas sobre trabalho em equipe e resiliência. Em resumo, o basquete é muito mais do que apenas um jogo; é uma paixão compartilhada por milhões de pessoas em todo o mundo, que valorizam a competição, camaradagem e a emoção de ver uma bola passar pela rede.', 'imagens/basquete.webp', 'includes/basquete.php', '2024-10-01 13:04:36'),
(5, 'CORRIDA', 'Calce seus tênis e sinta a energia pulsante das corridas. Desafie-se em diferentes distâncias, supere obstáculos e descubra os benefícios incríveis para saúde e o bem-estar que a corrida proporciona.', 'A corrida é uma atividade física de movimento rápido realizada pelos seres humanos há milhares de anos. No contexto moderno, a corrida é praticada tanto como uma forma de exercício físico quanto como um esporte competitivo. Os corredores podem escolher entre uma variedade de distâncias, desde sprints curtos até maratonas e ultramaratonas, dependendo de seus objetivos e níveis de condicionamento físico. A corrida oferece uma série de benefícios para a saúde, incluindo o fortalecimento do sistema cardiovascular, a queima de calorias, o aumento da resistência e a melhoria da saúde mental. Além disso, é uma atividade acessível, que requer pouco equipamento além de um bom par de tênis e roupas confortáveis. Competições de corrida são realizadas em todo o mundo, variando em distância, terreno e formato. Desde corridas de rua até trilhas naturais e pistas de atletismo, há opções para corredores de todos os gostos e habilidades. Eventos como maratonas e meias maratonas atraem milhares de participantes e espectadores, oferecendo uma experiência única de camaradagem e superação pessoal. Além das competições formais, muitas pessoas correm por diversão, como parte de seus regimes de exercícios diários ou para arrecadar fundos para causas beneficentes. A corrida também pode ser uma forma de explorar novos lugares, conectar-se com a natureza e aliviar o estresse do dia a dia. Em resumo, a corrida é uma atividade versátil e acessível que oferece uma série de benefícios físicos, mentais e emocionais. Seja você um corredor experiente ou iniciante, há algo de gratificante e energizante em cruzar a linha de chegada e alcançar seus objetivos pessoais', 'imagens/corrida.png', 'includes/corrida.php', '2024-10-01 13:05:22'),
(6, 'SURF', 'Sinta a liberdade e a conexão com o mar enquanto desliza pelas ondas no surf. Experimente a emoção de pegar a onda perfeita, domine as técnicas e mergulhe no estilo de vida descontraído e vibrante do surf.', 'O surf é um esporte aquático praticado em pranchas de surf, onde os surfistas deslizam sobre as ondas do mar, aproveitando a energia e a força da água para realizar manobras emocionantes. Originário das antigas culturas polinésias, o surf moderno evoluiu ao longo dos séculos para se tornar uma atividade de lazer, competição e estilo de vida em todo o mundo. Os surfistas enfrentam desafios únicos ao tentar se equilibrar e pegar as ondas, requerendo habilidades de equilíbrio, coordenação e força física. Eles buscam ondas de diferentes tamanhos e formas, dependendo de seu nível de habilidade e preferências pessoais. Além de ser um esporte emocionante, o surf oferece uma conexão profunda com a natureza e uma sensação de liberdade ao deslizar sobre as ondas. Muitos surfistas encontram na prática uma forma de relaxamento, meditação e escape do estresse da vida cotidiana. O surf também é uma forma de expressão artística e cultural, com sua própria linguagem, estilo e comunidade global. É comum encontrar festivais de surf, competições profissionais e uma variedade de marcas e produtos relacionados ao estilo de vida surfista. Além disso, o surf promove a saúde e o bem-estar físico, pois oferece um excelente exercício cardiovascular, melhora o equilíbrio e fortalece os músculos centrais e das extremidades. Também desafia a mente, exigindo concentração, tomada de decisões rápidas e resiliência diante de condições variáveis do mar. Em resumo, o surf é muito mais do que um esporte; é uma paixão, uma cultura e um estilo de vida que atrai pessoas de todas as idades e origens. Com sua combinação única de desafio, aventura e conexão com a natureza, o surf continua a cativar e inspirar surfistas em todo o mundo.', 'imagens/surf.jpg', 'includes/surf.php', '2024-10-01 13:05:54'),
(7, 'VÔLEI DE PRAIA', 'Sinta a energia vibrante e a liberdade do vôlei de praia enquanto salta sobre a areia quente e desafia os limites do seu corpo. Experimente a emoção de um saque poderoso, a precisão de um bloqueio certeiro e a alegria contagiante de uma jogada bem-sucedid', 'O vôlei de praia é um esporte dinâmico e envolvente, praticado em duplas em uma quadra de areia, geralmente à beira-mar. Com raízes que remontam às décadas de 1920 e 1930, na Califórnia, o vôlei de praia se popularizou rapidamente, tornando-se um dos esportes mais apreciados em áreas costeiras ao redor do mundo. O objetivo do jogo é fazer com que a bola toque o chão na quadra adversária, enquanto se evita que a equipe oponente faça o mesmo. Essa dinâmica exige não apenas habilidade e técnica, mas também resistência, agilidade e um bom trabalho em equipe.\r\n\r\nA prática do vôlei de praia traz uma série de benefícios para a saúde, incluindo o fortalecimento do sistema cardiovascular, o aumento da força muscular e a melhora da coordenação motora. A areia proporciona um ambiente de baixo impacto, tornando a atividade mais suave para as articulações, ao mesmo tempo que intensifica o desafio físico. Além disso, o esporte promove uma conexão com a natureza e o sol, o que pode melhorar o bem-estar mental e reduzir o estresse.\r\n\r\nCompetições de vôlei de praia são realizadas em nível local, nacional e internacional, incluindo eventos icônicos como os Jogos Olímpicos e o Circuito Mundial de Vôlei de Praia. Esses torneios atraem não apenas atletas de alto nível, mas também um público apaixonado, criando um ambiente vibrante e cheio de energia. O vôlei de praia também é uma atividade acessível, que pode ser praticada em praias e parques, independentemente do nível de habilidade.\r\n\r\nAlém de ser uma ótima maneira de se manter ativo, o vôlei de praia promove a socialização e o desenvolvimento de habilidades interpessoais, já que os jogadores frequentemente formam laços duradouros com seus parceiros e adversários. Em suma, o vôlei de praia é um esporte que combina diversão, desafio físico e interação social, proporcionando uma experiência gratificante para todos os envolvidos.', 'imagens/volei-praia.jpg', 'includes/volei_praia.php', '2024-10-01 13:06:29'),
(8, 'FUTEBOL', 'Sinta a adrenalina de uma partida de futebol enquanto você domina o campo com agilidade e técnica. Mergulhe na emoção de driblar adversários, acertar um passe preciso e disparar um chute que ressoa na rede do gol.', 'O futebol é uma das atividades mais empolgantes e acessíveis para quem busca se manter ativo e saudável. Jogar futebol não apenas melhora a resistência cardiovascular, a força muscular e a agilidade, mas também proporciona uma maneira divertida de liberar o estresse e a tensão do dia a dia. Com apenas uma bola e um espaço aberto, você pode reunir amigos para uma partida animada, seja em um campo, parque ou até na praia.\r\n\r\nA prática do futebol também promove a socialização, ajudando a criar laços mais fortes com os colegas de equipe. O trabalho em equipe é essencial, e cada jogada se torna uma oportunidade de aprendizado e crescimento pessoal. Além disso, a emoção de driblar, passar a bola e marcar gols proporciona uma sensação de conquista única e gratificante.\r\n\r\nParticipar de partidas regulares ou torneios locais é uma ótima maneira de se manter motivado e engajado. Você pode se juntar a ligas amadoras ou simplesmente organizar jogos informais com amigos. Com o tempo, você notará melhorias não apenas na sua condição física, mas também na sua coordenação e na sua capacidade de se concentrar. Então, calce suas chuteiras, reúna a galera e venha vivenciar toda a energia e a paixão que o futebol tem a oferecer!', 'imagens/futebol.jpg', 'includes/futebol.php', '2024-10-01 13:07:10'),
(9, 'TÊNIS', 'Desafie-se nas quadras de tênis e sinta a emoção de cada saque, cada devolução e cada smash poderoso. Experimente a sensação eletrizante de uma partida intensa, onde a precisão e a estratégia se encontram em cada movimento.', 'O tênis é um esporte praticado individualmente ou em duplas, onde os jogadores utilizam raquetes para rebater uma bola sobre uma quadra dividida ao meio por uma rede. Com raízes que remontam ao século XII na França, o tênis moderno evoluiu ao longo dos séculos para se tornar uma das atividades esportivas mais populares em todo o mundo. O objetivo do jogo é fazer com que a bola passe sobre a rede e caia dentro das linhas da quadra do adversário, ao mesmo tempo em que se evita que a bola rebatida pelo oponente alcance o chão dentro das próprias linhas. Isso requer uma combinação de habilidade, técnica, agilidade e estratégia. O tênis é praticado em diferentes superfícies, como grama, saibro, quadras duras e carpetes, cada uma com suas próprias características e desafios. As partidas podem ser disputadas em uma variedade de formatos, desde jogos individuais simples até torneios de grande escala, como os Grand Slam. Além de ser uma competição esportiva emocionante, o tênis oferece uma série de benefícios físicos e mentais para os praticantes. Ele ajuda a melhorar a coordenação motora, a resistência cardiovascular, a força muscular e a agilidade. Além disso, promove a socialização, o trabalho em equipe (no caso de partidas de duplas) e o desenvolvimento de habilidades mentais, como concentração, disciplina e estratégia. O tênis é um esporte acessível para pessoas de todas as idades e níveis de habilidade, podendo ser praticado recreativamente em clubes locais ou de forma mais competitiva em torneios profissionais. Com sua combinação única de desafio físico, mental e social, o tênis continua a atrair milhões de praticantes em todo o mundo.', 'imagens/tenis.jpg', 'includes/tenis.php', '2024-10-01 13:07:51'),
(10, 'MMA', 'O MMA (Mixed Martial Arts) é um esporte de combate que combina várias artes marciais, permitindo uma ampla gama de técnicas e estilos de luta. Com raízes que remontam a competições antigas, o MMA ganhou popularidade na década de 1990, especialmente com o ', 'O MMA (Mixed Martial Arts) é um esporte de combate que integra diversas disciplinas de luta, como boxe, jiu-jitsu, wrestling, muay thai, judô e outras artes marciais. A prática do MMA remonta a competições antigas, mas ganhou notoriedade na década de 1990, com o surgimento de organizações como o UFC, que ajudaram a popularizar o esporte em escala global.\r\n\r\nOs lutadores de MMA são treinados em uma variedade de técnicas, permitindo que eles adotem uma abordagem multifacetada durante as lutas. Essa versatilidade é crucial, pois cada luta é única, exigindo que os atletas se adaptem rapidamente às estratégias e estilos de seus oponentes. O treinamento inclui desenvolvimento de força, resistência, habilidades técnicas e, igualmente importante, aspectos mentais, como foco e resiliência.\r\n\r\nAs competições de MMA ocorrem em um espaço controlado, como um octógono ou um ringue, e são divididas em rounds. Os lutadores podem vencer por nocaute, finalização ou decisão dos juízes, e cada golpe ou movimento conta como um ponto para o desempenho geral. As regras são rigorosas, com a intenção de proteger a segurança dos participantes. Isso inclui regulamentos sobre técnicas permitidas, exames médicos e critérios de segurança.\r\n\r\nAlém de ser uma forma de competição, o MMA também é uma prática de condicionamento físico crescente. Muitas academias oferecem aulas de MMA para iniciantes, que não só buscam aprender técnicas de luta, mas também melhorar sua saúde e bem-estar. O esporte promove autoconfiança, disciplina e autodefesa, tornando-se uma escolha popular entre pessoas de todas as idades.\r\n\r\nEntretanto, o MMA não está isento de controvérsias. As preocupações com lesões, especialmente lesões cerebrais, têm gerado debates sobre a segurança dos atletas. Isso levou a constantes atualizações nas regulamentações, com o objetivo de garantir um ambiente mais seguro para todos os competidores.\r\n\r\nEm resumo, o MMA é um esporte dinâmico e multifacetado que combina habilidade técnica, condicionamento físico e estratégia mental. Ele continua a evoluir, atraindo novos praticantes e fãs, e se firmando como uma das modalidades de combate mais emocionantes e populares do mundo.', 'imagens/mma.jpg', '', '2024-10-25 20:13:39'),
(11, 'UFC', 'O UFC (Ultimate Fighting Championship) é a maior organização de MMA do mundo, famosa por seus eventos de combate emocionantes e competitivos. Desde sua fundação em 1993, o UFC transformou-se em um espetáculo global, reunindo os melhores lutadores em um oc', 'O UFC (Ultimate Fighting Championship) é a principal organização de artes marciais mistas (MMA) do mundo, tendo se tornado um fenômeno global desde sua fundação em 1993. Originalmente concebido como um torneio para determinar o estilo de luta mais eficaz, o UFC evoluiu para um evento esportivo altamente organizado e regulamentado. Os lutadores, que vêm de diversas disciplinas como boxe, jiu-jitsu, wrestling, muay thai e karatê, competem em um octógono, uma arena de formato octagonal que garante segurança e uma visão clara para o público.\r\n\r\nAs lutas no UFC são realizadas em diferentes categorias de peso, permitindo que atletas de variados tamanhos se enfrentem em condições justas. Cada luta é dividida em rounds, e os competidores podem vencer por nocaute, finalização ou decisão dos juízes. A adrenalina e a intensidade das lutas atraem milhões de espectadores, e o UFC tem se destacado por suas produções grandiosas, com eventos transmitidos para audiências em todo o mundo.\r\n\r\nAlém da competição em si, o UFC também promove uma cultura que abrange treinamento, disciplina e superação. Os lutadores se tornam ídolos para muitos, e suas histórias de vida e carreiras inspiram uma nova geração a se envolver com o esporte. A organização implementa rigorosos protocolos de segurança, incluindo exames médicos, para proteger a saúde dos atletas e minimizar os riscos de lesões.\r\n\r\nNos últimos anos, o UFC expandiu seu alcance globalmente, realizando eventos em diversos países e se tornando uma referência no mundo dos esportes de combate. Essa popularidade crescente também trouxe um aumento no interesse por academias de MMA, onde pessoas de todas as idades buscam não apenas competir, mas também melhorar seu condicionamento físico e aprender técnicas de autodefesa.', 'imagens/ufc.png', '', '2024-10-25 20:13:39');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` longtext NOT NULL,
  `dataRegistro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `registro`
--

INSERT INTO `registro` (`id`, `nome`, `email`, `telefone`, `login`, `senha`, `dataRegistro`) VALUES
(11, 'Lucas', 'lucas@gmail.com', '81985770506', 'LL', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-10-01 11:27:28'),
(16, 'Lucas', 'lucas@gmail.com', '89123723', 'LLL', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-10-11 20:09:38'),
(18, 'Lucas', 'lucas@gmail.com', '8198500001', 'LLLL', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-10-11 20:22:04'),
(19, 'Lucas', 'lucas@gmail.com', '8198500001', 'Lucas', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-10-11 20:35:19');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imc`
--
ALTER TABLE `imc`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imc`
--
ALTER TABLE `imc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
