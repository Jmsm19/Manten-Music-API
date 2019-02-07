<?php

/**
* @OA\Schema(
*   schema="UserResource",
*   @OA\Property(
*       property="username",
*       type="string"
*   )
* )
*/

/**
* @OA\Schema(
*   schema="SongsCollection",
*   @OA\Property(
*       property="title",
*       type="string"
*   )
* )
*/

/**
* @OA\Schema(
*   schema="AlbumResource",
*   @OA\Property(
*       property="name",
*       type="string",
*   ),
*   @OA\Property(
*       property="year",
*       type="integer",
*   ),
*   @OA\Property(
*       property="songs",
*       type="array",
*       @OA\Items(ref="#/components/schemas/SongsCollection")
*   )
* )
*/

/**
* @OA\Schema(
*   schema="ArtistResource",
*   @OA\Property(
*       property="artist",
*       type="string",
*   ),
*   @OA\Property(
*       property="albums",
*       type="array",
*       @OA\Items(ref="#/components/schemas/AlbumResource")
*   )
* )
*/

/**
* @OA\Schema(
*   schema="ArtistsCollection",
*   @OA\Property(
*       property="data",
*       type="array",
*       @OA\Items(ref="#/components/schemas/ArtistResource")
*   )
* )
*/
