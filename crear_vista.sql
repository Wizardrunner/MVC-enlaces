CREATE VIEW vista_enlaces AS
SELECT
    vinculos.pk_vinculo,
    vinculos.enlace,
    vinculos.titulo,
    categoria.categoria AS nombre_categoria,
    categoria.tipo AS tipo_categoria
FROM vinculos
JOIN categoria ON vinculos.fk_categoria = categoria.pk_categoria;
