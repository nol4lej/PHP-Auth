<link rel="stylesheet" href="../dashboard_blog/src/css/administrator.css">
<script src="../dashboard_blog/src/js/controlador_links.js"></script>
<main class="administrator_principal">
    <div class="datatable_container">
        <div class="header_tools">
            <div class="tools_container">
                <ul class="tools">
                    <li><input type="checkbox" name="" id=""></li>
                    <li><button type="button" onclick="modalEditor()">
                        <i class="material-icons">add_circle</i>
                        </button>
                    </li>
                    <li><button>
                        <i class="material-icons">edit</i>
                    </button>
                    </li>
                    <li><button>
                            <i class="material-icons">delete</i>
                        </button>
                    </li>
                    <li><button>
                        <i class="material-icons">share</i>
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
                <tbody class="datatable_posts" id="datatable_posts">
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
<script src="../dashboard_blog/src/js/tabla_posts.js"></script>