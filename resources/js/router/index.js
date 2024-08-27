import { createRouter, createWebHistory } from 'vue-router';
// import AdminLayout from '../components/AdminLayout.vue';
///Admin
import HomeAdminIndex from '../components/admin/home/index.vue';
//Admin Auth Start
import RegistrationComponent from '../components/auth/register.vue';
import Login from '../components/auth/login.vue';
//Admin Auth end
import Project from '../components/admin/home/projects.vue';
//Admin About Start
import About from '../components/admin/about/index.vue';
import Create from '../components/admin/about/create.vue';
import Edit from '../components/admin/about/edit.vue';
//Admin About End
import Country from '../components/admin/country/index.vue';
import CreateCountry from '../components/admin/country/create.vue';
import EditCountry from '../components/admin/country/edit.vue';
//Admin Country End
import State from '../components/admin/state/index.vue';
import CreateState from '../components/admin/state/create.vue';
import EditState from '../components/admin/state/edit.vue';
//Admin State End
import City from '../components/admin/cities/index.vue';
import CreateCity from '../components/admin/cities/create.vue';
import EditCity from '../components/admin/cities/edit.vue';
////admin/City End
import Location from '../components/admin/location/index.vue';
import CreateLocation from '../components/admin/location/create.vue';
import EditLocation from '../components/admin/location/edit.vue';
////admin/Location End  
import Category from '../components/admin/category/index.vue';
import CreateCategory from '../components/admin/category/create.vue';
import EditCategory from '../components/admin/category/edit.vue';
////admin/Category End 
import Article from '../components/admin/article/index.vue';
import CreateArticle from '../components/admin/article/create.vue';
import EditArticle from '../components/admin/article/edit.vue';

//websiteHome
import HomePropertiesIndex from '../components/properties/home/index.vue';
import ContactPropertiesIndex from '../components/properties/contact/contact.vue';
import AboutPropertiesIndex from '../components/properties/about/index.vue';
import ProjectPropertiesIndex from '../components/properties/project/index.vue';
import DeveloperPropertiesIndex from '../components/properties/developer/index.vue';
import CommunityPropertiesIndex from '../components/properties/communties/index.vue';
import CityPropertiesIndex from '../components/properties/cities/index.vue';
import CityPrimeIndex from '../components/properties/cities/PrimeLocation.vue';
import CityDisIndex from '../components/properties/cities/DisCity.vue';
import LocationIndex from '../components/properties/location/index.vue';
import ForeignInvestorIndex from '../components/properties/foreigninvestors/index.vue';
import NewArticleIndex from '../components/properties/articles/index.vue';
import ViewArticleIndex from '../components/properties/articles/ViewBySlug.vue';
import MortgageIndex from '../components/properties/mortgage/index.vue';
import InvestmentIndex from '../components/properties/investment/index.vue';
//notFound
import NotFound from '../components/notFound.vue';

const routes = [
    //Admin
    { path: '/admin/home',component: HomeAdminIndex,meta: { requiresAuth: true }   },
    {path: '/admin/about',component: About,meta: { requiresAuth: true }},
    {path: '/admin/create',component: Create,meta: { requiresAuth: true }},
    {path: '/admin/edit/:id',component: Edit,meta: { requiresAuth: true }},
    //admin//country
    {path: '/admin/country',component: Country,meta: { requiresAuth: true }},
    {path: '/admin/country/create',component: CreateCountry,meta: { requiresAuth: true }},
    { path: '/admin/country/edit/:id', component: EditCountry, meta: { requiresAuth: true } },
    ////admin/state
    {path: '/admin/state',component: State,meta: { requiresAuth: true }},
    {path: '/admin/state/create',component: CreateState,meta: { requiresAuth: true }},
    { path: '/admin/state/edit/:id', component: EditState, meta: { requiresAuth: true } },
    ////admin/Cities
    {path: '/admin/city',component: City,meta: { requiresAuth: true }},
    {path: '/admin/city/create',component: CreateCity,meta: { requiresAuth: true }},
    { path: '/admin/city/edit/:id', component: EditCity, meta: { requiresAuth: true } },
    ////admin/Location
    {path: '/admin/location',component: Location,meta: { requiresAuth: true }},
    {path: '/admin/location/create',component: CreateLocation,meta: { requiresAuth: true }},
    { path: '/admin/location/edit/:id', component: EditLocation, meta: { requiresAuth: true } },
    ////admin/Category
    {path: '/admin/category',component: Category,meta: { requiresAuth: true }},
    {path: '/admin/category/create',component: CreateCategory,meta: { requiresAuth: true }},
    { path: '/admin/category/edit/:id', component: EditCategory, meta: { requiresAuth: true } },
    ////admin/Article
    {path: '/admin/article',component: Article,meta: { requiresAuth: true }},
    {path: '/admin/article/create',component: CreateArticle,meta: { requiresAuth: true }},
    { path: '/admin/article/edit/:id', component: EditArticle, meta: { requiresAuth: true } },


    { path: '/Project',component: Project, meta: { requiresAuth: true }},
    { path: '/register',name: 'Register',component: RegistrationComponent,},
      {path: '/login',name: 'Login',component: Login,},
    //website
    {path: '/',component: HomePropertiesIndex
    },
    {path: '/about',component: AboutPropertiesIndex
    },
    {path: '/contact',component: ContactPropertiesIndex
    },
    {path: '/projects',component: ProjectPropertiesIndex
    },
    {path: '/developer',component: DeveloperPropertiesIndex
    },
    {path: '/communities',component: CommunityPropertiesIndex
    },
    {
        path:'/location',component:LocationIndex
    },
    {path: '/city-properties',component: CityPropertiesIndex
    },
    {path: '/cities/:slug',name:'CityDisIndex',component: CityDisIndex
    },
    {  path: '/cities',  name: 'CityPrimeIndex',  component: CityPrimeIndex,props: (route) => ({ city: route.query.city })
      },
    {path: '/foreign-investors',component: ForeignInvestorIndex
    },
    {path: '/news-articles',component: NewArticleIndex
    },
    {path: '/news-articles/:slug',component: ViewArticleIndex
    },
    {path: '/mortgage-offers',component: MortgageIndex
    },
    {path: '/property-investment-offers',component: InvestmentIndex
    },
    
    
    //notFound
    {path: '/:pathMatch(.*)*',component: NotFound
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});


// Example authentication logic
router.beforeEach((to, from, next) => {
    const isAuthenticated = !!localStorage.getItem('user-token'); // Check for token
    
    if (to.meta.requiresAuth && !isAuthenticated) {
        next({ name: 'Login' }); // Redirect to login if not authenticated
    } else {
        next(); // Proceed to the route
    }
});

export default router;
