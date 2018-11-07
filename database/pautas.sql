SELECT pautas.id_contrato, pautas.artistas_urbanos_id_artistas, pautas.fecha, usuarios.numero_unico_registro, entes_culturales.nombre_ente, parroquias.parroquia , (IF(date(pautas.fecha)>curdate(), "Pendiente", "Listo"))as estado FROM pautas INNER JOIN entes_culturales on pautas.entes_culturales_id_ente_cultural=entes_culturales.id_ente_cultural INNER JOIN usuarios on entes_culturales.usuarios_id_usuario=usuarios.id_usuario INNER JOIN parroquias on usuarios.parroquias_id_parroquia=parroquias.id_parroquia order BY pautas.fecha desc