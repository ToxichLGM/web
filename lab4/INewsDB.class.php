<?php
/**
 * inerface INewsDB
 * содержит основные методы для работы с новостной лентой
*/
interface INewsDB{
 /**
  * Добавление новой записи в новостную ленту
  * 
  * @param string $title - заголовок новости
  * @param string $category - категория новости
  * @param string $description - текст новости
  * @param string $source - источник новости
  * 
  * @return boolean - результат успех/ошибка
 */
 function saveNews(string $title, string $category, string $description, string $source): bool;
 
    /**
  * Выборка всех записей из новостной ленты
  * 
  * @return array - результат выборки в виде массива
 */
 function getNews(): array;
 
    /**
  * Удаление записи из новостной ленты
  * 
  * @param integer $id - идентификатор удаляемой записи
  * 
  * @return boolean - результат успех/ошибка
 */
 function deleteNews(int $id): bool;
}
?>
