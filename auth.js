// Add debug information to help diagnose the issue
console.log('Auth.js is loaded');

// Configure oidc-client-ts with your Cognito user pool settings
const cognitoAuthConfig = {
    authority: "https://cognito-idp.ap-southeast-1.amazonaws.com/ap-southeast-1_g2114GZQr",
    client_id: "12ap4v63fqjdm1ld22nj79vhpe",
    redirect_uri: "https://www.phymath.com",
    response_type: "code",
    scope: "email openid phone"
};

// Create a UserManager instance
// When loaded via script tag, the library creates a global 'Oidc' object
let userManager;
if (typeof Oidc !== 'undefined') {
    console.log('Oidc global is available');
    try {
        userManager = new Oidc.UserManager(cognitoAuthConfig);
        console.log('UserManager created successfully');
    } catch (error) {
        console.error('Error creating UserManager:', error);
    }
} else {
    console.error("OIDC library not loaded properly");
}

// Function to handle sign-out redirection
function signOutRedirect() {
    const clientId = "12ap4v63fqjdm1ld22nj79vhpe";
    const logoutUri = "https://www.phymath.com";
    const cognitoDomain = "https://phymath.auth.ap-southeast-1.amazoncognito.com";
    window.location.href = `${cognitoDomain}/logout?client_id=${clientId}&logout_uri=${encodeURIComponent(logoutUri)}`;
}