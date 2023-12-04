using System;
using System.Linq;
using CinemaAPI.Data;
using CinemaAPI.Model;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;

namespace CinemaAPI.Controllers {
    [Route("api/[controller]")]
    [ApiController]

    public class UserInfoController : ControllerBase {
        private readonly APIContext _context;

        public UserInfoController(APIContext context) {
            _context = context;
        }


        [HttpGet("users")]
        public async Task<ActionResult<IEnumerable<UserInfo>>> GetUserInfo() {
            try {
                var users = await _context.UserInfo.ToListAsync();
                return Ok(users);
            }
            catch (Exception ex) {
                return StatusCode(500, $"An error occurred: {ex.Message}");
            }
        }

        [HttpPost("login")]
        public async Task<ActionResult> Login([FromBody] UserLogin loginData) {
            try {
                var user = await _context.UserInfo.FirstOrDefaultAsync(u => u.Email == loginData.Email && u.Password == loginData.Password);

                if (user != null) {
                    // Authentication successful
                    return Ok(new { success = true });
                }
                else {
                    // Authentication failed
                    return Unauthorized(new { success = false });
                }
            }
            catch (Exception ex) {
                return StatusCode(500, $"An error occurred: {ex.Message}");
            }
        }

        [HttpPost("register")]
        public async Task<ActionResult> Register([FromBody] UserRegister registerData) {
            try {
                // Check if the user already exists
                var existingUser = await _context.UserInfo.FirstOrDefaultAsync(u => u.Email == registerData.Email);
                if (existingUser != null) {
                    return Conflict("User with this email already exists");
                }

                // Generate a unique ID for the user
                var userId = Guid.NewGuid();

                // Create a new UserInfo object
                var newUser = new UserInfo {
                    UserId = userId,
                    FullName = registerData.FullName,
                    PhoneNumber = registerData.PhoneNumber,
                    Email = registerData.Email,
                    Password = registerData.Password
                };

                // Save the new user to the database
                _context.UserInfo.Add(newUser);
                await _context.SaveChangesAsync();

                // Registration successful
                return Ok(new { success = true });
            }
            catch (Exception ex) {
                return StatusCode(500, $"An error occurred: {ex.Message}");
            }
        }

        [HttpDelete("{id}")]
        public async Task<IActionResult> DeleteUserInfo(Guid id) {
            try {
                var userInfo = await _context.UserInfo.FindAsync(id);
                if (userInfo == null) {
                    return NotFound();
                }

                _context.UserInfo.Remove(userInfo);
                await _context.SaveChangesAsync();

                return NoContent();
            }
            catch (Exception ex) {
                return StatusCode(500, $"An error occurred: {ex.Message}");
            }
        }
    }

    public class FilmInfoController : ControllerBase {
        private readonly APIContext _context;
        public FilmInfoController(APIContext context) {
            _context = context;
        }

        [HttpGet("FilmInfo/films")]
        public async Task<ActionResult<IEnumerable<FilmInfo>>> GetFilmInfo() {
            try {
                var films = await _context.FilmInfo.ToListAsync();
                return Ok(films);
            }
            catch (Exception ex) {
                return StatusCode(500, $"An error occurred: {ex.Message}");
            }
        }
    }

}
