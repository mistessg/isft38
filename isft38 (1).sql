-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 29, 2023 at 06:13 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isft38`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE `alumnos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dni` int(11) NOT NULL,
  `carrera_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacionalidad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuil` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domicilio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barrio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_postal` int(11) NOT NULL,
  `fec_nac` date NOT NULL,
  `lug_nac` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prov_nac` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `est_civil` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hijos` tinyint(1) NOT NULL,
  `fam_a_cargo` tinyint(1) NOT NULL,
  `tel_fijo` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_alternativo` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_alt_pertenece` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo_intermedio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anio_egreso` date NOT NULL,
  `escuela_egreso` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distrito_egreso` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otro_estudio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otro_estudio_inst` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otro_estudio_egreso` date NOT NULL,
  `otro_estudio2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otro_estudio_inst2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otro_estudio_egreso2` date NOT NULL,
  `trabaja` tinyint(1) NOT NULL,
  `actividad_trabajo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horario_trabajo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obra_social` tinyint(1) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visado_por` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotoc_dni_ok` tinyint(1) NOT NULL,
  `fotoc_titulo_ok` tinyint(1) NOT NULL,
  `certificado_sec_ok` tinyint(1) NOT NULL,
  `foto_ok` tinyint(1) NOT NULL,
  `partida_nac_ok` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `anios`
--

CREATE TABLE `anios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `anio` int(11) NOT NULL,
  `descripcion` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anios`
--

INSERT INTO `anios` (`id`, `anio`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 1, 'PRIMERO', NULL, NULL),
(2, 2, 'SEGUNDO', NULL, NULL),
(3, 3, 'TERCERO', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carreras`
--

CREATE TABLE `carreras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anios` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resolucion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_carpeta` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carreras`
--

INSERT INTO `carreras` (`id`, `descripcion`, `anios`, `resolucion`, `texto`, `imagen`, `nombre_carpeta`, `created_at`, `updated_at`) VALUES
(1, 'Tecnicatura Superior en Logística', '3', '1557/08', 'Es el profesional capacitado para gestionar, diseñar, implementar, evaluar y optimizar los procesos que componen la administración del flujo de materiales y servicios desde el proveedor hasta el cliente. Tendrá la capacidad de implementar técnicas que faciliten la toma de decisiones y procedimientos para la gestión en el área, de acuerdo a los marcos conceptuales que sustentan los principios y normas pertinente al campo de la logística.', '', '', NULL, NULL),
(2, 'Tecnicatura Superior en Análisis de Sistemas', '3', '6790/19', 'Es el profesional capacitado para diagnosticar necesidades, diseñar, desarrollar, poner en servicio y mantener productos, servicios o soluciones informáticas acorde a los requerimientos de las organizaciones.\r\n\r\nTendrá la capacidad de diagnosticar el conflicto de una organización, podrá ordenar sus recursos y actividades, además diseñar y desarrollar sistemas informáticos.', '', '', NULL, NULL),
(3, 'Tecnicatura Superior en Administración Contable', '3', '273/03', 'El Técnico Superior en Administración Contable es un profesional que estará capacitado para desarrollar las competencias para: organizar, programar, ejecutar y controlar las operaciones comerciales, financieras y administrativas de la organización; elaborar, controlar y registrar el flujo de información; organizar y planificar los recursos referidos para desarrollar sus actividades interactuando con el entorno y participando en la toma de decisiones relacionadas con sus actividades. Coordinando equipos de trabajo relacionado con su especialidad. Estas competencias serán desarrolladas según las incumbencias y las normas técnicas y legales que rigen su campo profesional.', '', '', NULL, NULL),
(4, 'Tecnicatura Superior en Administración de Recursos Humanos\r\n', '3', '11/11', 'Es el profesional capacitado para organizar, programar, planificar y ejecutar diversas actividades del sector de Recursos Humanos de las organizaciones en las cuales se inserte. Tendrá la capacidad de organizar, programar, ejecutar y controlar en las áreas de desarrollo de dirección y planeamiento, producción, recursos humanos, financiamiento, contabilización, gestión integral dentro de los distintos tipos de organización.', '', '', NULL, NULL),
(5, 'Tecnicatura Superior en Gestión Ambiental y Salud', '3', '123/12', 'Es el profesional con formación científica, tecnológica y ética, competente para la intervención en los procesos técnicos y específicos del campo de la gestión ambiental. Diseñará y ejecutará planes y programas tendientes a la vigilancia ambiental y sanitaria, en ámbitos urbanos y rurales.\r\n\r\nTendrá la capacidad de coordinar actividades de protección y promoción de la salud ambiental e implementar estrategias de atención primaria.', '', '', NULL, NULL),
(6, 'Tecnicatura Superior en Higiene y Seguridad en el Trabajo', '3', '11/111', 'Es el profesional capacitado para el asesoramiento a reparticiones, empresas y asociaciones profesionales en todo lo concerniente a su actividad. Estará habilitado para controlar el cumplimiento de las normas de seguridad e higiene en el trabajo en el área de su competencia, adoptando las medidas preventivas de acuerdo a cada tipo de industria o actividad. Tendrá la capacidad de elaborar normas manuales de higiene y seguridad en el trabajo, además de realizar tareas de investigación y desarrollo para el mejor desenvolvimiento de su labor.', '', '', NULL, NULL),
(7, 'Tecnicatura Superior en Laboratorio de Análisis Clí­nicos', '3', '44/999', '\r\nEl Técnico Superior en Laboratorio de Análisis Clínicos es competente, de acuerdo a las actividades que se desarrollan, para:\r\n\r\n- Atender a la persona y obtener materiales biológicos para su análisis, aportando a la producción de información a través de la ejecución de procedimientos analíticos y la gestión del proceso de su trabajo.\r\n\r\n- Involucrarse en los procesos de mejora continua.\r\n\r\nTodo ello con la supervisión del/la Bioquímico/a o Profesional universitario a cargo del laboratorio habilitado.\r\n\r\nComo profesional de la salud, su práctica profesional está caracterizada por una actitud reflexiva, crítica, ética y humanística basada en una concepción integral del hombre propendiendo a mejorar la calidad de vida de la población.', '', '', NULL, NULL),
(8, 'Tecnicatura Superior en Mantenimiento Industrial', '3', '45/55', 'Es el profesional que tendrá como propósito identificar problemas, buscar alternativas y tomar decisiones ante la presencia de fallas. A su vez, estará habilitado para evaluar situaciones y diseñar propuestas de mejora en el mantenimiento. Tendrá la capacidad de la organización del trabajo propio y de los otros a su cargo. Podrá formular y ejecutar planes de mantenimiento preventivo y predictivo óptimos, en función de los mecanismos de deterioros detectados. Tendrá además la habilidad para inspeccionar e identificar el estado de deterioro de un equipo para lograr su restauración, mejorando la confiabilidad y mantenibilidad del mismo.', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carrerasedes`
--

CREATE TABLE `carrerasedes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sede_id` bigint(20) UNSIGNED DEFAULT NULL,
  `carrera_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comisions`
--

CREATE TABLE `comisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sede_id` bigint(20) UNSIGNED DEFAULT NULL,
  `carrera_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comision` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cupos`
--

CREATE TABLE `cupos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carrera_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cupos` int(11) NOT NULL,
  `reservados` int(11) NOT NULL,
  `inscriptos` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cupos`
--

INSERT INTO `cupos` (`id`, `carrera_id`, `cupos`, `reservados`, `inscriptos`, `created_at`, `updated_at`) VALUES
(1, 1, 59, 2, 0, NULL, NULL),
(2, 2, 60, 2, 0, NULL, NULL),
(3, 3, 60, 2, 0, NULL, NULL),
(4, 4, 59, 2, 0, NULL, NULL),
(5, 5, 60, 2, 0, NULL, NULL),
(6, 6, 60, 2, 0, NULL, NULL),
(7, 7, 60, 2, 0, NULL, NULL),
(8, 8, 60, 2, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `etiquetas`
--

CREATE TABLE `etiquetas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `etiquetas`
--

INSERT INTO `etiquetas` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'novedades', 'novedades', NULL, NULL),
(2, 'cartelera', 'cartelera', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fechas`
--

CREATE TABLE `fechas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dia_hora` datetime NOT NULL,
  `dni` int(11) NOT NULL,
  `carrera_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `historias`
--

CREATE TABLE `historias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `historia` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sede_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `historias`
--

INSERT INTO `historias` (`id`, `historia`, `sede_id`, `created_at`, `updated_at`) VALUES
(2, 'Gracias a las iniciativa de un grupo de personas, surge en el año 1972 la necesidad de la creación del Instituto de Formación Técnica Nº 38, destinado a la enseñanza técnica de nivel superior para los habitantes de nuestra zona.\r\n\r\nPor entonces se vislumbró que la estructura interna del sector productivo, había alcanzado un grado de heterogeneidad mucho mayor que el que tuviera hasta ese momento, generando en consecuencia, un estancamiento del volumen de mano de obra especializado, para las ramas más dinámicas de la industria y el comercio. Con el objeto de satisfacer la demanda de ocupaciones que requerían niveles educacionales específicos de alta calificación, se canalizaron los objetivos al sector de servicios. También se tuvieron en cuenta la realidad económica y las crecientes aspiraciones de las personas del lugar, que deseaban mejorar su nivel técnico-formativo.\r\n\r\nComo consecuencia del deterioro de la situación económica de nuestra zona y alrededores, cada vez fue mayor la cantidad de jóvenes egresados de escuelas secundarias que dejaban de emigrar hacia las grandes urbes en busca de una Educación Superior, volcándose a las nuevas e interesantes carreras que la región demandaba, asegurando amplios campos laborales y futuro a sus egresos.De esta manera, los estudiantes no solo no afectaban el presupuesto familiar (viajando, manteniendo viviendas en grandes ciudades) sino también podían contribuir a la economía familiar realizando alguna actividad laboral.\r\n\r\nEste cúmulo de circunstancias ayudaron a definir los ejes que permitieron enfocar un nuevo tratamiento de la Educación Superior. Atento a lo expuesto, el 28 de noviembre de 1972 el entonces Ministerio de Educación de la Provincia de Buenos Aires emitió la resolución Nª 2965/72 que dispuso la creación del establecimiento.\r\n\r\nEste Instituto superior, se caracterizó por la flexibilidad estructural desde que, en el año 1973, comenzó su actividad académica con el dictado de las Licenciaturas en Administración de Empresas y en administración de personal. En 1979, se reestructura con carreras de Técnicos Superiores (Análisis de Sistemas, Administración de Empresas, Seguridad e Higiene Industrial y Mantenimiento Mecánico). A partir de 1982 se inicia el dictado de las carreras de Formación Docente, comenzando con la carrera de Asistente Educacional y, en 1988, Magisterio Especializado en Educación de Adultos. Para los docentes en actividad desde 1985 se implementaron carreras con modalidad “no residentes” (Actualización Docente, Conducción de servicios Educativos, Supervisión de servicios educativos, Supervisión de Servicios Educativos y Capacitación Docente Nivel I y Nivel II). Con las mismas características se abrió en 1991 la carrera de bibliotecnología (Auxiliar, Escolar y Profesional). Paralelamente desde 1985 se inició el distado de carreras regulares como el Profesorado en Psicopedagogía y en 1992 el Profesorado de Educación Física. En 1994 se dictó Capacitación Docente nivel III, orientada especialmente a los profesores de la casa (egresados universitarios) para mejorar su quehacer pedagógico. En el mismo año se crea la Extensión Ramallo, con el dictado de las carreras Técnico Superior en Administración de Empresas y el Profesorado Especializado en jardín maternal. El curso de Operador de PC para los internos de la Unidad Penal Nª3 en la Extensión allí creada en 1991, continúa desarrollándose desde esa fecha.\r\n\r\nA partir de 1997, el Instituto Superior Nª38 volvió a ser exclusivamente técnico y actualmente se dictan las carreras de Analista de Sistemas de Información y Analista en Administración de Empresas, en la Sede Central; Analista en Administración de Empresas y Operador de PC, en la extensión Ramallo y Operador de PC, en la Extensión Unidad Penal Nª3. En 1998 se da apertura a la carrera de Técnico Superior en Seguridad, Higiene y Control Ambiental Industrial.\r\n\r\nLa Institución pretende contar con los mejores recursos técnicos pedagógicos, y para llevar adelante esta propuesta, cuenta con profesores de primer Nivel, una tradición académica de consideración, una creciente actividad en la capacitación de su personal y un incondicional apoyo de su asociación Cooperadora y del Centro de Estudiantes.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `horarios`
--

CREATE TABLE `horarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sede_id` bigint(20) UNSIGNED DEFAULT NULL,
  `carrera_id` bigint(20) UNSIGNED DEFAULT NULL,
  `anio_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profesor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `materia_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comision_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dia` bigint(20) UNSIGNED DEFAULT NULL,
  `modulohorario_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comentario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inscripciones`
--

CREATE TABLE `inscripciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `dni` int(11) NOT NULL,
  `carrera_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hash` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inscripciones`
--

INSERT INTO `inscripciones` (`id`, `fecha`, `hora`, `dni`, `carrera_id`, `hash`, `created_at`, `updated_at`) VALUES
(17, '2023-12-01', '17:45:00', 11111111, 1, 'ec5c92a93ff4f774465e5c876f488283', '2023-08-25 01:19:22', '2023-08-25 01:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `lista_espera`
--

CREATE TABLE `lista_espera` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carrera_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `telefono` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_alternativo` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materias`
--

CREATE TABLE `materias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrera_id` bigint(20) UNSIGNED DEFAULT NULL,
  `anio_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profesor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_18_220204_create_programas_table', 1),
(6, '2022_08_18_220257_create_carreras_table', 1),
(7, '2022_08_18_220330_create_objetivos_table', 1),
(8, '2022_08_18_220346_create_historias_table', 1),
(9, '2022_08_18_220402_create_anios_table', 1),
(10, '2022_08_18_220428_create_horarios_table', 1),
(11, '2022_08_18_220503_create_comisions_table', 1),
(12, '2022_08_18_220556_create_carrerasedes_table', 1),
(13, '2022_08_18_220658_create_modulos_table', 1),
(14, '2022_08_18_220712_create_materias_table', 1),
(15, '2022_08_18_221032_create_profesors_table', 1),
(16, '2022_08_18_221056_create_sedeemails_table', 1),
(17, '2022_08_18_221117_create_sedes_table', 1),
(18, '2022_08_18_221134_create_sedetelefonos_table', 1),
(19, '2022_08_18_235420_alter_programas_table', 1),
(20, '2022_08_18_235726_alter_historias_table', 1),
(21, '2022_08_18_235758_alter_carrerasedes_table', 1),
(22, '2022_08_18_235818_alter_horarios_table', 1),
(23, '2022_08_18_235831_alter_sedeemails_table', 1),
(24, '2022_08_18_235849_alter_materia_table', 1),
(25, '2022_08_18_235901_alter_sedetelefonos_table', 1),
(26, '2022_08_18_235924_alter_objetivos_table', 1),
(27, '2022_08_18_235938_alter_comision_table', 1),
(28, '2022_08_31_015137_create_noticias_table', 1),
(29, '2022_08_31_220114_create_notifications_table', 1),
(30, '2022_08_31_233600_create_etiquetas_table', 1),
(31, '2022_08_31_233933_create_noticias_files', 1),
(32, '2022_09_01_013436_delete_materia_comisions_table', 1),
(33, '2022_09_09_235818_alter_horarios_table_comentario', 1),
(34, '2023_06_12_224040_fechas', 1),
(35, '2023_06_12_224525_alumnos', 1),
(36, '2023_06_12_225506_cupos', 1),
(37, '2023_06_12_225839_lista_espera', 1),
(38, '2023_06_21_212336_turnos_admin', 1),
(41, '2023_06_29_220737_inscripciones', 2);

-- --------------------------------------------------------

--
-- Table structure for table `modulos`
--

CREATE TABLE `modulos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `horainicio` time NOT NULL,
  `horafin` time NOT NULL,
  `duracion` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuerpo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `autor` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `archivo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archivo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archivo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `cuerpo`, `imagen`, `created_at`, `updated_at`, `carrera_id`, `autor`, `deleted_at`, `archivo1`, `archivo2`, `archivo3`) VALUES
(1, 'TEST', 'TEST', NULL, '2023-06-29 00:45:15', '2023-06-29 00:45:15', 2, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `noticias_etiquetas`
--

CREATE TABLE `noticias_etiquetas` (
  `noticia_id` bigint(20) UNSIGNED NOT NULL,
  `etiqueta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `noticias_etiquetas`
--

INSERT INTO `noticias_etiquetas` (`noticia_id`, `etiqueta_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-06-29 00:45:15', '2023-06-29 00:45:15'),
(1, 2, 1, '2023-06-29 00:45:15', '2023-06-29 00:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `objetivos`
--

CREATE TABLE `objetivos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `objetivo` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sede_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `objetivos`
--

INSERT INTO `objetivos` (`id`, `objetivo`, `sede_id`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Objetivos generales</strong></p>\r\n<p>Proporcionar a nuestros estudiantes una adecuada orientacion personal y profesional en funci&oacute;n de los requerimientos de la Empresa, de la ciudad, la zona y la regi&oacute;n.</p>\r\n<p>Proporcionar a nuestros estudiantes la adquisici&oacute;n de t&eacute;cnicas de trabajo, intelectual que le permita acceder a la informaci&oacute;n a su uso de manera progresivamente m&aacute;s autonoma.</p>\r\n<p>Brindar h&aacute;bitos de trabajo responsable.</p>\r\n<p>Preparar profesionales capacitados para competir en el mercado laboral.</p>\r\n<p>&nbsp;<strong>Objetivos de la carreras</strong></p>\r\n<p>Formar recursos humanos capaces de insertarse laboralmente en el mercado.</p>\r\n<p>Proporcionar formaci&oacute;n especializada y de car&aacute;rter interdisciplinario en las diferentes &aacute;reas de la Ciencia y Tecnolog&iacute;a.</p>\r\n<p>Promover la capacitaci&oacute;n, actualizaci&oacute;n y especializaci&oacute;n T&eacute;cnico &ndash; Profesional.</p>\r\n<p>Acceder a un permanente incremento de los niveles de calidad y eficiencia, de la Educacion Superior T&eacute;cnica.</p>\r\n<p>&nbsp;<strong>Objetivos institucionales</strong></p>\r\n<p>Proponemos una gestion institucional democr&aacute;tica regida por los principios de participaci&oacute;n y transparencia, participando a los estudiantes de reuniones con el CAI, Centro de estudiantes, ya que entendemos que los estudiantes son sujetos activos en los procesos de ense&ntilde;anza y aprendizaje.</p>\r\n<p>Buscamos acomodar las estrategias de ense&ntilde;anza a las necesidades de nuestos estudiantes, atendiendo las necesidad del alumnado respondiendo tambi&eacute;n al perfil del egresado que busca el mercado productivo y de servicio local, zonal y regional.</p>\r\n<p>Tenemos como objetivo proporcionar a nuestros estudiantes una adecuada orientaci&oacute;n profesional y una &oacute;ptima capacitaci&oacute;n.</p>\r\n<p>Indicio de todas estas pr&aacute;cticas son los cursos que se dictan en la instituci&oacute;n, la mayoria destinado a los estudiantes (tambi&eacute;n hay abiertos a la comunidad), como por ejemplo el curso de incendio, el de riesgo escolar o los de prevenci&oacute;n auditiva.</p>', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profesors`
--

CREATE TABLE `profesors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programas`
--

CREATE TABLE `programas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sede_id` bigint(20) UNSIGNED DEFAULT NULL,
  `carrera_id` bigint(20) UNSIGNED DEFAULT NULL,
  `anio_id` bigint(20) UNSIGNED DEFAULT NULL,
  `materia_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comision_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profesor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nombrearchivo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ruta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaentrega` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registros`
--

CREATE TABLE `registros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sedeemails`
--

CREATE TABLE `sedeemails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sede_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sedeemails`
--

INSERT INTO `sedeemails` (`id`, `email`, `sede_id`, `created_at`, `updated_at`) VALUES
(1, 'info@isft38.edu.ar', 1, NULL, NULL),
(2, 'secretaria@isft38.edu.ar', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sedes`
--

CREATE TABLE `sedes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sedeimagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sedes`
--

INSERT INTO `sedes` (`id`, `descripcion`, `calle`, `numero`, `ciudad`, `sedeimagen`, `created_at`, `updated_at`) VALUES
(1, 'Sede Central San Nicolás', 'Av. Central', '1825', 'San Nicolás de los Arroyos', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sedetelefonos`
--

CREATE TABLE `sedetelefonos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caracteristica` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sede_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sedetelefonos`
--

INSERT INTO `sedetelefonos` (`id`, `caracteristica`, `numero`, `sede_id`, `created_at`, `updated_at`) VALUES
(1, '0336', '4492188', 1, NULL, NULL),
(2, '0336', '4462857', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `turnos`
--

CREATE TABLE `turnos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `turnos`
--

INSERT INTO `turnos` (`id`, `fecha`, `hora`, `created_at`, `updated_at`) VALUES
(222, '2023-12-01', '17:45:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(223, '2023-12-01', '18:00:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(224, '2023-12-01', '18:15:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(225, '2023-12-01', '18:30:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(226, '2023-12-01', '18:45:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(227, '2023-12-01', '19:00:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(228, '2023-12-01', '19:15:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(229, '2023-12-01', '19:30:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(230, '2023-12-01', '19:45:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(231, '2023-12-01', '20:00:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(232, '2023-12-01', '20:15:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(233, '2023-12-01', '20:30:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(234, '2023-12-01', '20:45:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(235, '2023-12-01', '21:00:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(236, '2023-12-01', '21:15:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(237, '2023-12-01', '21:30:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(238, '2023-12-04', '17:45:00', '2023-08-18 00:08:56', '2023-08-18 00:08:56'),
(239, '2023-12-04', '18:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(240, '2023-12-04', '18:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(241, '2023-12-04', '18:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(242, '2023-12-04', '18:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(243, '2023-12-04', '19:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(244, '2023-12-04', '19:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(245, '2023-12-04', '19:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(246, '2023-12-04', '19:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(247, '2023-12-04', '20:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(248, '2023-12-04', '20:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(249, '2023-12-04', '20:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(250, '2023-12-04', '20:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(251, '2023-12-04', '21:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(252, '2023-12-04', '21:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(253, '2023-12-04', '21:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(254, '2023-12-05', '17:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(255, '2023-12-05', '18:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(256, '2023-12-05', '18:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(257, '2023-12-05', '18:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(258, '2023-12-05', '18:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(259, '2023-12-05', '19:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(260, '2023-12-05', '19:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(261, '2023-12-05', '19:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(262, '2023-12-05', '19:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(263, '2023-12-05', '20:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(264, '2023-12-05', '20:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(265, '2023-12-05', '20:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(266, '2023-12-05', '20:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(267, '2023-12-05', '21:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(268, '2023-12-05', '21:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(269, '2023-12-05', '21:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(270, '2023-12-06', '17:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(271, '2023-12-06', '18:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(272, '2023-12-06', '18:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(273, '2023-12-06', '18:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(274, '2023-12-06', '18:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(275, '2023-12-06', '19:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(276, '2023-12-06', '19:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(277, '2023-12-06', '19:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(278, '2023-12-06', '19:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(279, '2023-12-06', '20:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(280, '2023-12-06', '20:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(281, '2023-12-06', '20:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(282, '2023-12-06', '20:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(283, '2023-12-06', '21:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(284, '2023-12-06', '21:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(285, '2023-12-06', '21:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(286, '2023-12-07', '17:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(287, '2023-12-07', '18:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(288, '2023-12-07', '18:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(289, '2023-12-07', '18:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(290, '2023-12-07', '18:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(291, '2023-12-07', '19:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(292, '2023-12-07', '19:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(293, '2023-12-07', '19:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(294, '2023-12-07', '19:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(295, '2023-12-07', '20:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(296, '2023-12-07', '20:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(297, '2023-12-07', '20:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(298, '2023-12-07', '20:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(299, '2023-12-07', '21:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(300, '2023-12-07', '21:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(301, '2023-12-07', '21:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(302, '2023-12-08', '17:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(303, '2023-12-08', '18:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(304, '2023-12-08', '18:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(305, '2023-12-08', '18:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(306, '2023-12-08', '18:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(307, '2023-12-08', '19:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(308, '2023-12-08', '19:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(309, '2023-12-08', '19:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(310, '2023-12-08', '19:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(311, '2023-12-08', '20:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(312, '2023-12-08', '20:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(313, '2023-12-08', '20:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(314, '2023-12-08', '20:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(315, '2023-12-08', '21:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(316, '2023-12-08', '21:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(317, '2023-12-08', '21:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(318, '2023-12-11', '17:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(319, '2023-12-11', '18:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(320, '2023-12-11', '18:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(321, '2023-12-11', '18:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(322, '2023-12-11', '18:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(323, '2023-12-11', '19:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(324, '2023-12-11', '19:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(325, '2023-12-11', '19:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(326, '2023-12-11', '19:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(327, '2023-12-11', '20:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(328, '2023-12-11', '20:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(329, '2023-12-11', '20:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(330, '2023-12-11', '20:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(331, '2023-12-11', '21:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(332, '2023-12-11', '21:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(333, '2023-12-11', '21:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(334, '2023-12-12', '17:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(335, '2023-12-12', '18:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(336, '2023-12-12', '18:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(337, '2023-12-12', '18:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(338, '2023-12-12', '18:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(339, '2023-12-12', '19:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(340, '2023-12-12', '19:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(341, '2023-12-12', '19:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(342, '2023-12-12', '19:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(343, '2023-12-12', '20:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(344, '2023-12-12', '20:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(345, '2023-12-12', '20:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(346, '2023-12-12', '20:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(347, '2023-12-12', '21:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(348, '2023-12-12', '21:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(349, '2023-12-12', '21:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(350, '2023-12-13', '17:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(351, '2023-12-13', '18:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(352, '2023-12-13', '18:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(353, '2023-12-13', '18:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(354, '2023-12-13', '18:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(355, '2023-12-13', '19:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(356, '2023-12-13', '19:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(357, '2023-12-13', '19:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(358, '2023-12-13', '19:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(359, '2023-12-13', '20:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(360, '2023-12-13', '20:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(361, '2023-12-13', '20:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(362, '2023-12-13', '20:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(363, '2023-12-13', '21:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(364, '2023-12-13', '21:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(365, '2023-12-13', '21:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(366, '2023-12-14', '17:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(367, '2023-12-14', '18:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(368, '2023-12-14', '18:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(369, '2023-12-14', '18:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(370, '2023-12-14', '18:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(371, '2023-12-14', '19:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(372, '2023-12-14', '19:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(373, '2023-12-14', '19:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(374, '2023-12-14', '19:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(375, '2023-12-14', '20:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(376, '2023-12-14', '20:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(377, '2023-12-14', '20:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(378, '2023-12-14', '20:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(379, '2023-12-14', '21:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(380, '2023-12-14', '21:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(381, '2023-12-14', '21:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(382, '2023-12-15', '17:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(383, '2023-12-15', '18:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(384, '2023-12-15', '18:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(385, '2023-12-15', '18:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(386, '2023-12-15', '18:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(387, '2023-12-15', '19:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(388, '2023-12-15', '19:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(389, '2023-12-15', '19:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(390, '2023-12-15', '19:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(391, '2023-12-15', '20:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(392, '2023-12-15', '20:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(393, '2023-12-15', '20:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(394, '2023-12-15', '20:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(395, '2023-12-15', '21:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(396, '2023-12-15', '21:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(397, '2023-12-15', '21:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(398, '2023-12-18', '17:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(399, '2023-12-18', '18:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(400, '2023-12-18', '18:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(401, '2023-12-18', '18:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(402, '2023-12-18', '18:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(403, '2023-12-18', '19:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(404, '2023-12-18', '19:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(405, '2023-12-18', '19:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(406, '2023-12-18', '19:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(407, '2023-12-18', '20:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(408, '2023-12-18', '20:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(409, '2023-12-18', '20:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(410, '2023-12-18', '20:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(411, '2023-12-18', '21:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(412, '2023-12-18', '21:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(413, '2023-12-18', '21:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(414, '2023-12-19', '17:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(415, '2023-12-19', '18:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(416, '2023-12-19', '18:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(417, '2023-12-19', '18:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(418, '2023-12-19', '18:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(419, '2023-12-19', '19:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(420, '2023-12-19', '19:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(421, '2023-12-19', '19:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(422, '2023-12-19', '19:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(423, '2023-12-19', '20:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(424, '2023-12-19', '20:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(425, '2023-12-19', '20:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(426, '2023-12-19', '20:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(427, '2023-12-19', '21:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(428, '2023-12-19', '21:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(429, '2023-12-19', '21:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(430, '2023-12-20', '17:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(431, '2023-12-20', '18:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(432, '2023-12-20', '18:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(433, '2023-12-20', '18:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(434, '2023-12-20', '18:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(435, '2023-12-20', '19:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(436, '2023-12-20', '19:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(437, '2023-12-20', '19:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(438, '2023-12-20', '19:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(439, '2023-12-20', '20:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(440, '2023-12-20', '20:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(441, '2023-12-20', '20:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(442, '2023-12-20', '20:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(443, '2023-12-20', '21:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(444, '2023-12-20', '21:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(445, '2023-12-20', '21:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(446, '2023-12-21', '17:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(447, '2023-12-21', '18:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(448, '2023-12-21', '18:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(449, '2023-12-21', '18:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(450, '2023-12-21', '18:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(451, '2023-12-21', '19:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(452, '2023-12-21', '19:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(453, '2023-12-21', '19:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(454, '2023-12-21', '19:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(455, '2023-12-21', '20:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(456, '2023-12-21', '20:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(457, '2023-12-21', '20:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(458, '2023-12-21', '20:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(459, '2023-12-21', '21:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(460, '2023-12-21', '21:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(461, '2023-12-21', '21:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(462, '2023-12-22', '17:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(463, '2023-12-22', '18:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(464, '2023-12-22', '18:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(465, '2023-12-22', '18:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(466, '2023-12-22', '18:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(467, '2023-12-22', '19:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(468, '2023-12-22', '19:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(469, '2023-12-22', '19:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(470, '2023-12-22', '19:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(471, '2023-12-22', '20:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(472, '2023-12-22', '20:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(473, '2023-12-22', '20:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(474, '2023-12-22', '20:45:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(475, '2023-12-22', '21:00:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(476, '2023-12-22', '21:15:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57'),
(477, '2023-12-22', '21:30:00', '2023-08-18 00:08:57', '2023-08-18 00:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'gero@gmail.com', 'gero@gmail.com', NULL, '$2y$10$mbuTfCjEFrnmvdWEfjuyU.Zxg.RcaO1AzYPYBdEgmtuvzBWd9nRNO', 1, NULL, '2023-06-29 00:44:00', '2023-06-29 00:44:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumnos_carrera_id_foreign` (`carrera_id`);

--
-- Indexes for table `anios`
--
ALTER TABLE `anios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carrerasedes`
--
ALTER TABLE `carrerasedes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrerasedes_carrera_id_foreign` (`carrera_id`),
  ADD KEY `carrerasedes_sede_id_foreign` (`sede_id`);

--
-- Indexes for table `comisions`
--
ALTER TABLE `comisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comisions_sede_id_foreign` (`sede_id`),
  ADD KEY `comisions_carrera_id_foreign` (`carrera_id`);

--
-- Indexes for table `cupos`
--
ALTER TABLE `cupos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cupos_carrera_id_foreign` (`carrera_id`);

--
-- Indexes for table `etiquetas`
--
ALTER TABLE `etiquetas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fechas`
--
ALTER TABLE `fechas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fechas_carrera_id_foreign` (`carrera_id`);

--
-- Indexes for table `historias`
--
ALTER TABLE `historias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historias_sede_id_foreign` (`sede_id`);

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `horarios_sede_id_foreign` (`sede_id`),
  ADD KEY `horarios_carrera_id_foreign` (`carrera_id`),
  ADD KEY `horarios_anio_id_foreign` (`anio_id`),
  ADD KEY `horarios_materia_id_foreign` (`materia_id`);

--
-- Indexes for table `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inscripciones_carrera_id_foreign` (`carrera_id`);

--
-- Indexes for table `lista_espera`
--
ALTER TABLE `lista_espera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materias_carrera_id_foreign` (`carrera_id`),
  ADD KEY `materias_anio_id_foreign` (`anio_id`),
  ADD KEY `materias_profesor_id_foreign` (`profesor_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `noticias_titulo_unique` (`titulo`),
  ADD KEY `noticias_autor_foreign` (`autor`),
  ADD KEY `noticias_carrera_id_foreign` (`carrera_id`);

--
-- Indexes for table `noticias_etiquetas`
--
ALTER TABLE `noticias_etiquetas`
  ADD KEY `noticias_etiquetas_noticia_id_foreign` (`noticia_id`),
  ADD KEY `noticias_etiquetas_etiqueta_id_foreign` (`etiqueta_id`),
  ADD KEY `noticias_etiquetas_user_id_foreign` (`user_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `objetivos`
--
ALTER TABLE `objetivos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `objetivos_sede_id_foreign` (`sede_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profesors`
--
ALTER TABLE `profesors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programas_sede_id_foreign` (`sede_id`),
  ADD KEY `programas_carrera_id_foreign` (`carrera_id`),
  ADD KEY `programas_anio_id_foreign` (`anio_id`),
  ADD KEY `programas_materia_id_foreign` (`materia_id`),
  ADD KEY `programas_comision_id_foreign` (`comision_id`),
  ADD KEY `programas_profesor_id_foreign` (`profesor_id`);

--
-- Indexes for table `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sedeemails`
--
ALTER TABLE `sedeemails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sedeemails_sede_id_foreign` (`sede_id`);

--
-- Indexes for table `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sedetelefonos`
--
ALTER TABLE `sedetelefonos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sedetelefonos_sede_id_foreign` (`sede_id`);

--
-- Indexes for table `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `anios`
--
ALTER TABLE `anios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carrerasedes`
--
ALTER TABLE `carrerasedes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comisions`
--
ALTER TABLE `comisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cupos`
--
ALTER TABLE `cupos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `etiquetas`
--
ALTER TABLE `etiquetas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fechas`
--
ALTER TABLE `fechas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `historias`
--
ALTER TABLE `historias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lista_espera`
--
ALTER TABLE `lista_espera`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `objetivos`
--
ALTER TABLE `objetivos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profesors`
--
ALTER TABLE `profesors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programas`
--
ALTER TABLE `programas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registros`
--
ALTER TABLE `registros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sedeemails`
--
ALTER TABLE `sedeemails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sedetelefonos`
--
ALTER TABLE `sedetelefonos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=478;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `carrerasedes`
--
ALTER TABLE `carrerasedes`
  ADD CONSTRAINT `carrerasedes_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carrerasedes_sede_id_foreign` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comisions`
--
ALTER TABLE `comisions`
  ADD CONSTRAINT `comisions_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comisions_sede_id_foreign` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cupos`
--
ALTER TABLE `cupos`
  ADD CONSTRAINT `cupos_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fechas`
--
ALTER TABLE `fechas`
  ADD CONSTRAINT `fechas_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `historias`
--
ALTER TABLE `historias`
  ADD CONSTRAINT `historias_sede_id_foreign` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_anio_id_foreign` FOREIGN KEY (`anio_id`) REFERENCES `anios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horarios_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horarios_materia_id_foreign` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horarios_sede_id_foreign` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD CONSTRAINT `inscripciones_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_anio_id_foreign` FOREIGN KEY (`anio_id`) REFERENCES `anios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materias_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materias_profesor_id_foreign` FOREIGN KEY (`profesor_id`) REFERENCES `profesors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_autor_foreign` FOREIGN KEY (`autor`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `noticias_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `noticias_etiquetas`
--
ALTER TABLE `noticias_etiquetas`
  ADD CONSTRAINT `noticias_etiquetas_etiqueta_id_foreign` FOREIGN KEY (`etiqueta_id`) REFERENCES `etiquetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `noticias_etiquetas_noticia_id_foreign` FOREIGN KEY (`noticia_id`) REFERENCES `noticias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `noticias_etiquetas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `objetivos`
--
ALTER TABLE `objetivos`
  ADD CONSTRAINT `objetivos_sede_id_foreign` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `programas`
--
ALTER TABLE `programas`
  ADD CONSTRAINT `programas_anio_id_foreign` FOREIGN KEY (`anio_id`) REFERENCES `anios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programas_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programas_comision_id_foreign` FOREIGN KEY (`comision_id`) REFERENCES `comisions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programas_materia_id_foreign` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programas_profesor_id_foreign` FOREIGN KEY (`profesor_id`) REFERENCES `profesors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programas_sede_id_foreign` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sedeemails`
--
ALTER TABLE `sedeemails`
  ADD CONSTRAINT `sedeemails_sede_id_foreign` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sedetelefonos`
--
ALTER TABLE `sedetelefonos`
  ADD CONSTRAINT `sedetelefonos_sede_id_foreign` FOREIGN KEY (`sede_id`) REFERENCES `sedes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
