<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="{{ url('/') }}" class="brand-link">
            <!--begin::Brand Image-->
            <img src="{{ url('dist/assets/logo/ultranet.png') }}" alt="Ultranet Logo"
                class="brand-image opacity-75 shadow">
            <!--end::Brand Image-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{ url('/') }}" class="nav-link active">
                        <i class="nav-icon bi bi-house"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">My Space</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-person-gear"></i>
                        <p>
                            Mon Compte
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('profil') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('password') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Modifier mot de passe</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-printer"></i>
                        <p>
                            Impression Rapport
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Rapport d'activité</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Journal</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Bilan & Impression</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-award-fill"></i>
                        <p>
                            Montant
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('categories_produits.index') }}" class="nav-link">
                                <i class="bi bi-award-fill"></i>
                                <p>
                                    Definir Montant
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('categories_produits.create') }}" class="nav-link">
                                <i class="bi bi-award-fill"></i>
                                <p>
                                    Modifier Montant
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{route('categories_produits.index')}}" class="nav-link">
                        <i class="bi bi-award-fill"></i>
                        <p>
                            Definir Montant
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-award-fill"></i>
                        <p>
                            Devis
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('devis.create') }}" class="nav-link">
                                <i class="bi bi-award-fill"></i>
                                <p>
                                    Creer Devis
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('devis.create') }}" class="nav-link">
                                <i class="bi bi-award-fill"></i>
                                <p>
                                    Modifier Devis
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
             
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-award-fill"></i>
                        <p>
                            Facture
                        </p>
                    </a>
                </li>
                <li class="nav-header">Localisation</li>
                <li class="nav-item">
                    <a href="{{ route('clients.index') }}" class="nav-link">
                        <i class="bi bi-award-fill"></i>
                        <p>
                            Clients
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('agences.index') }}" class="nav-link">
                        <i class="bi bi-award-fill"></i>
                        <p>
                            Agences
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('magasins.index') }}" class="nav-link">
                        <i class="bi bi-award-fill"></i>
                        <p>
                            Magasin
                        </p>
                    </a>
                </li>
                <li class="nav-header">Matieres Premiere</li>

                {{-- <li class="nav-header">Responsabilité</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-award-fill"></i>
                        <p>
                            Permission
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Pouvoir</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Pouvoir</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-box"></i>
                        <p>
                            Catégorie
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('categories.index') }}" class="nav-link">
                                <i class="bi bi-award-fill"></i>
                                <p>
                                    Gerer Catégorie
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('importCategories') }}" class="nav-link">
                                <i class="bi bi-award-fill"></i>
                                <p>
                                    Import Catégorie
                                </p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-box"></i>
                        <p>
                            Produit
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('produits.index') }}" class="nav-link">
                                <i class="bi bi-award-fill"></i>
                                <p>
                                    Gerer Produits
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('importProduits') }}" class="nav-link">
                                <i class="bi bi-award-fill"></i>
                                <p>
                                    Import Produits
                                </p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-header">Supervision</li>
                <li class="nav-item">
                    <a href="{{ route('personneldepartement.index') }}" class="nav-link">
                        <i class="bi bi-award-fill"></i>
                        <p>
                            Affectation personnels
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('delegation_tache.index') }}" class="nav-link">
                        <i class="bi bi-award-fill"></i>
                        <p>
                            Delegation
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('departements.index') }}" class="nav-link">
                        <i class="bi bi-award-fill"></i>
                        <p>
                            Services
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('personnels.index') }}" class="nav-link">
                        <i class="bi bi-award-fill"></i>
                        <p>
                            Personnels
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('taches.index') }}" class="nav-link">
                        <i class="bi bi-award-fill"></i>
                        <p>
                            Taches
                        </p>
                    </a>
                </li>




                <li class="nav-header">Approvisionnement</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-award-fill"></i>
                        <p>
                            Entree
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-award-fill"></i>
                        <p>
                            Sortie
                        </p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-award-fill"></i>
                        <p>
                            Pouvoir 2
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Pouvoir</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Pouvoir</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
