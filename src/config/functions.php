<?php

function getKeysFromJson($filePath) {
    if (!file_exists($filePath)) {
        return [];
    }

    $jsonContent = file_get_contents($filePath);
    
    $data = json_decode($jsonContent, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        return [];
    }

    $keys = array_keys($data);

    return $keys;
}

function getContentBySlug($slug) {
    $filePath = 'texts.json'; // Caminho para o arquivo JSON
    if (!file_exists($filePath)) {
        return []; // Retorna um array vazio se o arquivo não existir
    }

    $jsonContent = file_get_contents($filePath);
    $data = json_decode($jsonContent, true);

    if (json_last_error() !== JSON_ERROR_NONE || !isset($data[$slug])) {
        return []; // Retorna um array vazio se houver erro no JSON ou se a slug não existir
    }

    return $data[$slug]; // Retorna o array com título, descrição e conteúdo
}


