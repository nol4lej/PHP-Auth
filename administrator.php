<link rel="stylesheet" href="/src/css/administrator.css">
<script src="/src/js/controlador_links.js"></script>
<main class="administrator_principal">
    <div class="datatable_container">
        <div class="header_tools">
            <div class="tools_container">
                <ul class="tools">
                    <li><input type="checkbox" name="" id=""></li>
                    <li><button type="button" name="create_post" onclick="doFetch(event)">
                            <i name="create_post" class="material-icons">add_circle</i>
                        </button>
                    </li>
                    <li><button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                            </svg>
                        </button>
                    </li>
                    <li><button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </button>
                    </li>
                    <li><button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-share-fill" viewBox="0 0 16 16">
                            <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="search">
                <input type="text" placeholder="Buscador">
            </div>
        </div>

        <div class="datatable_scroll">
            <table class="datatable">
                <thead class="datatable_header">
                    <tr>
                        <th></th>
                        <th>Status</th>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Fecha</th>
                        <th>Categoría</th>
                        <th>Vistas</th>
                    </tr>
                </thead>
                <tbody class="datatable_posts">
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td></td>
                        <td>1</td>
                        <td>Primera publicacion</td>
                        <td>01/01/01</td>
                        <td>Noticia</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td></td>
                        <td>1</td>
                        <td>Primera publicacion</td>
                        <td>01/01/01</td>
                        <td>Noticia</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td></td>
                        <td>1</td>
                        <td>Primera publicacion</td>
                        <td>01/01/01</td>
                        <td>Noticia</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="footer_tools">
            <div class="list-items">
                Show
                <select name="" id="">
                    <option value="5">5</option>
                    <option value="10" selected>10</option>
                    <option value="15">15</option>
                </select>
            </div>

            <div class="pages_container">
                <ul class="pages">
                    <li><span class="active"></span>1</li>
                    <li><button>2</button></li>
                    <li><span>...</span></li>
                    <li><button>9</button></li>
                    <li><button>10</button></li>
                </ul>
            </div>
        </div>
    </div>
</main>