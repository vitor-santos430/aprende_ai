drop database if exists tcc_bd;
create database tcc_bd;
use tcc_bd;
ALTER DATABASE `tcc_bd`CHARSET = Latin1 COLLATE = latin1_swedish_ci;

create table tb_tipo_usuario
(
id_tipo_usuario int not null auto_increment primary key,
nm_tipo_usuario varchar(25)
);
create table tb_usuario
(
id_usuario int not null auto_increment primary key,
nome_usuario varchar(30) not null,
sobrenome_usuario varchar(30) not null,
apelido_usuario varchar(20) not null,
email_usuario varchar(50) not null,
senha_usuario varchar(30) not null,
cpf varchar(18) null,
cnpj varchar(18) null,
endereco varchar(50) null,
complemento varchar(30) null,
cidade varchar(30) null,
estado varchar(30) null,
cep varchar(10) not null,
tipo_usuario int not null, /*FK*/
permissao_conteudo int not null, /*1 = (pode criar conteudo) 0 = (não pode criar conteudo)*/
img_usuario varchar(900),
st_ativo char not null,

CONSTRAINT tipo_usuario_FK
FOREIGN KEY (tipo_usuario)
REFERENCES tb_tipo_usuario (id_tipo_usuario)
);

select * from tb_usuario;

create table tb_tema
(
id_tema int not null auto_increment primary key,
nm_tema varchar(25) not null,
img_tema varchar(900) not null,
descricao_tema varchar(900) not null
);

create table tb_curso
(
id_curso int not null auto_increment primary key,
nm_curso varchar(60) not null,
descricao_curso varchar(500) not null,
img_curso varchar(900) not null,
date_post date not null,
tema_curso int not null, /*FK*/


CONSTRAINT tema_curso_FK
FOREIGN KEY (tema_curso)
REFERENCES tb_tema (id_tema)
);

create table tb_assunto
(
id_assunto int not null auto_increment primary key,
nm_assunto varchar(60) not null,
descricao_assunto varchar(500) not null,
conteudo_assunto text not null,
img_assunto varchar(900) not null,
assunto_curso int not null, /*FK*/
st_ativo int not null, /*1 - ativo, 0 - não ativo*/
ordem_assunto int,

CONSTRAINT assunto_curso_FK
FOREIGN KEY (assunto_curso)
REFERENCES tb_curso (id_curso)
);

create table tb_curso_usuario
(
id_curso_usuario int not null auto_increment primary key,
date_access datetime,
id_curso_cu int not null,
id_usuario_cu int not null,


CONSTRAINT id_curso_cu_FK
FOREIGN KEY (id_curso_cu)
REFERENCES tb_curso (id_curso),

CONSTRAINT id_usuario_cu_FK
FOREIGN KEY (id_usuario_cu)
REFERENCES tb_usuario (id_usuario)

);

create table tb_pergunta_forum
(
id_pergunta_forum int not null auto_increment primary key,
pergunta varchar(244) not null,
forum_curso int not null,/*FK*/
usuario_perg_forum int not null, /*FK*/

CONSTRAINT forum_curso_FK
FOREIGN KEY (forum_curso)
REFERENCES tb_curso (id_curso),

CONSTRAINT usuario_perg_forum_FK
FOREIGN KEY (usuario_perg_forum)
REFERENCES tb_usuario (id_usuario)
);

create table tb_resposta_forum
(
id_resposta_forum int not null auto_increment primary key,
resposta varchar(244) not null,
pergunta_resp_forum int not null,/*FK*/
usuario_resp_forum int not null, /*FK*/

CONSTRAINT pergunta_resposta_forum_FK
FOREIGN KEY (pergunta_resp_forum)
REFERENCES tb_pergunta_forum (id_pergunta_forum),

CONSTRAINT usuario_resp_forum_FK
FOREIGN KEY (usuario_resp_forum)
REFERENCES tb_usuario (id_usuario)
);

create table tb_vagas(
id_vaga int not null auto_increment primary key,
NomeDaVaga varchar(150) not null,
descricaoVaga varchar(1000) not null,
email_Vaga varchar(200) not null,
nome_contato varchar(200) not null,
st_ativo int not null, /*ativo = 1 | desativado = 0*/
id_Empresa int not null,

constraint vagas_Empresas
foreign key (id_Empresa)
references tb_usuario(id_usuario)
);

insert into tb_tipo_usuario (nm_tipo_usuario)
values  ('Pessoa Fisica'),
		('Pessoa Juridica');
  insert into tb_usuario(nome_usuario, sobrenome_usuario, apelido_usuario, email_usuario, senha_usuario, cpf, cnpj, endereco, complemento, cidade, estado, cep, tipo_usuario, permissao_conteudo, st_ativo)
  values ('teste','teste','teste','teste','teste','123',null,'teste','teste','teste','teste','123',1,1,'s'),
		 ('batata','batata','batata','batata','batata',null,'1231235646','batata','batata','batata','batata','123',2,1,'s');
 select * from tb_usuario;

	insert into tb_tema(nm_tema, img_tema, descricao_tema)
    values ('enem','1.jpg','Enem top tiops aklnmskldnsakldnsaklndklsandlsakjdlksa kldsajkldsajkldsa dslakjd sakld salkdjas');

	insert into tb_curso(nm_curso,descricao_curso, img_curso, date_post, tema_curso )
    values ('Matemática','números e númeos e números e soma', 'matematica.jpg','2018-10-20',1),
    ('Matemático','números e númeos e números e soma','banner01.jpg','2020-02-10',1),
    ('Geografia','maps maps maps maps maps maps maps maps','geografia.jpg','2020-01-02',1),
    ('History','dinossauro dinossauro dinossauro dinossauro dinossauro dinossauro','historia.jpg','2020-01-10',1);
    select * from tb_curso;

    insert into tb_curso_usuario(date_access, id_curso_cu, id_usuario_cu)
    values('2020-04-25',1,1),
		  ('2020-02-10',2,1),
          ('2020-03-10',3,1),
          ('2020-01-10',4,1);
    SELECT * FROM tb_curso_usuario ORDER BY date_access DESC LIMIT 6;

select nm_curso,
descricao_curso,
img_curso

from tb_curso_usuario

inner join tb_Curso on tb_curso_usuario.id_curso_cu = tb_Curso.id_curso
order by date_access desc limit 6
;



desc tb_usuario;
show tables;
select * from tb_curso_usuario;

select * from tb_curso_usuario;

select * from tb_assunto;
insert into tb_assunto(nm_assunto, descricao_assunto, conteudo_assunto, img_assunto, assunto_curso, st_ativo)
values("Regra de 4", "blhablha blha matematica blah blah blah teste","ushduasjfasnjkf sajh jklsafhjkashfjkas fksaj fhsajk fjks hfjksah fjkas fjk","1.jpg",1,1),
("conjuntos", "blhablha blha conjuntos blah blah blah teste","ushduasjfasnjkf sajh jklsafhjkashfjkas fksaj fhsajk fjks hfjksah fjkas fjk","2.jpg",1,1),
("operações básicas", "operações básicas blha matematica blah blah blah teste","ushduasjfasnjkf sajh jklsafhjkashfjkas fksaj fhsajk fjks hfjksah fjkas fjk","3.jpg",1,1),
("funções", "blhablha blha matematica blah blah blah teste","ushduasjfasnjkf sajh jklsafhjkashfjkas fksaj fhsajk fjks hfjksah fjkas fjk","4.jpg",1,1),
("esquações", "blhablha blha matematica funçõe blah teste","ushduasjfasnjkf sajh jklsafhjkashfjkas fksaj fhsajk fjks hfjksah fjkas fjk","5.jpg",1,1),
("geometria", "geometria matematica blah blah blah teste","ushduasjfasnjkf sajh jklsafhjkashfjkas fksaj fhsajk fjks hfjksah fjkas fjk","6.jpg",1,1),
("probabilidade", "blhablha blha matematica blah bprobabilidadelah teste","ushduasjfasnjkf sajh jklsafhjkashfjkas fksaj fhsajk fjks hfjksah fjkas fjk","7.jpg",1,1);

SELECT *
                                                                 from tb_vagas;
