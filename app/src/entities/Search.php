<?php

class Search
{


    public function buildQuery($search)
    {
        $sql = "SELECT * FROM mismatch_riskyjobs";
        // Extrai as palavras-chaves de busca e as coloca em um array

        $clean = str_replace(',', '', $search);
        $clean = str_replace("'", '', $search);
        $words = explode(' ', $clean);
        $final_search_words = array();

        if (count($words) > 0) {
            foreach ($words as $word) {
                if (!empty($word)) {
                    $final_search_words[] = $word;
                }
            }
        }

        // //Gera uma cláusula WHERE usando todas as palavras-chaves de busca
        $where = array();

        if (count($final_search_words) > 0) {
            foreach ($final_search_words as $word) {
                $where[] = "description LIKE'%" . $word . "%'";
            }
        }
        $clause = implode(' OR ', $where);

        // Adiciona a cláusula WHERE á consulta de busca.                        
        if (!empty($clause)) {
            $sql .= " WHERE $clause";
        }
        return $sql;
    }

    public function generate_sort_link($search, $sort)
    {
        $sort_links = '';

        switch ($sort) {
            case 1:
                $sort_links .= '<th><a href="' . $_SERVER['PHP_SELF'] . '?usersearch=' . $search . '&sort=2">Titulo</a></th>';
                $sort_links .= '<th><a href="' . $_SERVER['PHP_SELF'] . '?usersearch=' . $search . '&sort=3">Estado</a></th>';
                $sort_links .= '<th><a href="' . $_SERVER['PHP_SELF'] . '?usersearch=' . $search . '&sort=5">Data</a></th>';
                break;
            case 3:
                $sort_links .= '<td><a href="' . $_SERVER['PHP_SELF'] . '?usersearch=' . $search . '&sort=1">Titulo</a></td>';
                $sort_links .= '<td><a href="' . $_SERVER['PHP_SELF'] . '?usersearch=' . $search . '&sort=4">Estado</a></td>';
                $sort_links .= '<td><a href="' . $_SERVER['PHP_SELF'] . '?usersearch=' . $search . '&sort=5">Data</a></td>';
                break;
            case 5:
                $sort_links .= '<td><a href="' . $_SERVER['PHP_SELF'] . '?usersearch=' . $search . '&sort=1">Titulo</a></td>';
                $sort_links .= '<td><a href="' . $_SERVER['PHP_SELF'] . '?usersearch=' . $search . '&sort=3">Estado</a></td>';
                $sort_links .= '<td><a href="' . $_SERVER['PHP_SELF'] . '?usersearch=' . $search . '&sort=5">Data</a></td>';
                break;
            default:
                $sort_links .= '<td><a href="' . $_SERVER['PHP_SELF'] . '?usersearch=' . $search . '&sort=1">Titulo</a></td>';
                $sort_links .= '<td><a href="' . $_SERVER['PHP_SELF'] . '?usersearch=' . $search . '&sort=3">Estado</a></td>';
                $sort_links .= '<td><a href="' . $_SERVER['PHP_SELF'] . '?usersearch=' . $search . '&sort=5">Data</a></td>';
        }
        return $sort_links;
    }
}
