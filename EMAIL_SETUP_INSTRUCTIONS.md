# Email Setup Instructions for Ahadu Habesha Order Form

## Quick Setup (5 minutes)

### Option 1: Web3Forms (Recommended - Free)

1. **Visit:** https://web3forms.com/
2. **Click:** "Create Access Key"
3. **Enter your email:** girmatensae18@gmail.com
4. **Copy the Access Key** you receive
5. **Replace** `YOUR_ACCESS_KEY` in `order-form-direct.html` with your actual key

### Option 2: Formspree (Alternative)

1. **Visit:** https://formspree.io/
2. **Create account** with girmatensae18@gmail.com
3. **Create new form**
4. **Copy the form endpoint** (looks like: https://formspree.io/f/xbjelqyw)
5. **Replace** the action URL in `order-form-direct.html`

### Option 3: EmailJS (Most Features)

1. **Visit:** https://www.emailjs.com/
2. **Create account**
3. **Add email service** (Gmail recommended)
4. **Create email template**
5. **Get Public Key and Service ID**
6. **Update** `order-form.html` with your keys

---

## Current Status

The form is currently set up to use Web3Forms. You need to:

1. Get a free access key from https://web3forms.com/
2. Replace `YOUR_ACCESS_KEY` in the order form
3. Test the form

## Features

✅ **Direct email sending** - No mail client popup  
✅ **Order confirmation** - "Order sent successfully" message  
✅ **Form clearing** - Automatic form reset after sending  
✅ **Professional emails** - Formatted order details  
✅ **Mobile friendly** - Works on all devices  
✅ **Error handling** - Fallback options if email fails  

## Email Format

The emails will include:
- Product name and price
- Customer name and phone
- Full delivery address
- Additional message
- Order timestamp

## Testing

After setup, test by:
1. Click any shopping cart on your website
2. Fill out the order form
3. Submit and check for "Order sent successfully"
4. Check girmatensae18@gmail.com for the order email

---

**Need help?** Contact support for the email service you choose or let me know if you need assistance with the setup.