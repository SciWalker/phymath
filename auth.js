// Add debug information to help diagnose the issue
console.log('Auth.js is loaded');

const cognitoAuthConfig = {
    authority: "https://cognito-idp.ap-southeast-1.amazonaws.com/ap-southeast-1_g2114GZQr",
    client_id: "12ap4v63fqjdm1ld22nj79vhpe",
    redirect_uri: "https://www.phymath.com",
    response_type: "code",
    scope: "email openid profile"
};

// Make sure the OIDC library is available before creating userManager
let userManager;
// Log what global objects are available
console.log('Available globals that might be OIDC:', 
  'Oidc' in window ? 'Oidc is available' : 'Oidc is NOT available',
  'oidc' in window ? 'oidc is available' : 'oidc is NOT available',
  'UserManager' in window ? 'UserManager is available' : 'UserManager is NOT available');

if (typeof Oidc !== 'undefined') {
    console.log('Oidc global variable is defined');
    try {
        userManager = new Oidc.UserManager(cognitoAuthConfig);
        console.log('userManager created successfully');
    } catch (error) {
        console.error('Error creating userManager:', error);
    }
} else {
    console.error("OIDC library not loaded properly");
    // Try alternative global variables that might be exposed by the library
    if (typeof UserManager !== 'undefined') {
        console.log('UserManager global is available');
        try {
            userManager = new UserManager(cognitoAuthConfig);
            console.log('userManager created successfully via UserManager global');
        } catch (error) {
            console.error('Error creating userManager with UserManager global:', error);
        }
    } else if (typeof oidc !== 'undefined') {
        console.log('lowercase oidc global is available');
        try {
            userManager = new oidc.UserManager(cognitoAuthConfig); 
            console.log('userManager created successfully via lowercase oidc');
        } catch (error) {
            console.error('Error creating userManager with lowercase oidc:', error);
        }
    } else {
        console.error('Could not find any suitable OIDC global variables');
    }
}

function signOutRedirect() {
    const clientId = "12ap4v63fqjdm1ld22nj79vhpe";
    const logoutUri = "https://www.phymath.com";
    const cognitoDomain = "https://phymath.auth.ap-southeast-1.amazoncognito.com";
    window.location.href = `${cognitoDomain}/logout?client_id=${clientId}&logout_uri=${encodeURIComponent(logoutUri)}`;
}