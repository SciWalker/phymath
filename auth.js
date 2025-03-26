// Add debug information to help diagnose the issue
console.log('Auth.js is loaded');

// Configure oidc-client with the new Cognito user pool settings
const cognitoAuthConfig = {
    authority: "https://cognito-idp.ap-southeast-1.amazonaws.com/ap-southeast-1_imx2kjxuI",
    client_id: "3u0mj5hp80bou7ujghs7q9gffe",
    redirect_uri: "https://d84l1y8p4kdic.cloudfront.net", // Using the exact redirect URI from your Cognito config
    response_type: "code",
    scope: "email openid phone"
};

// Create a UserManager instance
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

// Sign out redirect function
function signOutRedirect() {
    const clientId = "3u0mj5hp80bou7ujghs7q9gffe";
    const logoutUri = "https://d84l1y8p4kdic.cloudfront.net"; // Also update logout URI to match
    const cognitoDomain = "https://ap-southeast-1imx2kjxui.auth.ap-southeast-1.amazoncognito.com";
    window.location.href = `${cognitoDomain}/logout?client_id=${clientId}&logout_uri=${encodeURIComponent(logoutUri)}`;
}